<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\Aria;
use AppBundle\Model\Download;
use AppBundle\Form\AriaType;
use AppBundle\Service\Aria2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use AppBundle\AppBundle as A;

class DefaultController extends Controller
{

	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		// test de connexion
		$checkDBConnection = $this->get(A::DAO_DL)->testConnection();
		return $this->render('AppBundle:Accueil/templates:list.html.twig', array(
			'db_status' => $checkDBConnection
		));
	}

	/**
	 * @Route("/accueil", name="d9_accueil_app")
	 *
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function accueilAction(Request $request)
	{
		return $this->render('AppBundle:Accueil/templates:list.html.twig', array(
			// ...
		));
	}

	/**
	 * @Route("/generalInfo", name="d9_info_app")
	 *
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function getInfo(Request $request)
	{
		if ($request->isXmlHttpRequest()) {
			//call database
			$aria = new Aria();
			$aria_array = $this->get(A::DAO_DL)->getDownloadList($aria);
			if ($aria_array != false) {
				$rpc = $this->cluster();
				// $stats = $rpc->getGlobalStat(); //ok
				// $options = $rpc->getGlobalOption(); //ok
				// $active = $rpc->tellActive(); //ok
				// $session = $rpc->getSessionInfo();
				// $version = $rpc->getVersion();
				// $waiting = $aria->tellWaiting(); // required gid
				// $stop = $aria->tellStopped(); // required gid
				// $status = $aria->tellStatus(); // required gid
				
				$rpc->destruct();
				$response = new Response(json_encode(array(
					// 'stats' => $stats,
					// 'active' => $active,
					// 'options' => $options,
					// 'sesssion' => $session,
					// 'keys' => $keys,
					// 'version' => $version,
					// 'waiting' => $waiting,
					// 'stop' => $stop
					'DLList' => $aria_array,
					'db_error' => 0
				)));
				return $response;
			} else {
				return $response = new Response(json_encode(array('db_error'=>'db_com_error')));
			}
		} else {
			throw new MethodNotAllowedHttpException(array(
				'AJAX'
			));
		}
	}

	/**
	 * @Route("/statusInfo", name="d9_status_app")
	 *
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function getStatus(Request $request)
	{
		if ($request->isXmlHttpRequest()) {
			$gid = $request->query->get('gid');
			if (! isset($gid) || $gid === null) {
				return $this->render('AppBundle:Accueil/templates:list.html.twig', array(
					// ...
				));
			}
			$download = new Download();
			// from RPC
			$rpc = $this->cluster();
			$results = $rpc->tellStatus($gid);
			$download->setStatus(isset($results['status']) ? $results['status'] : null)
				->setTotalLength(isset($results['totalLength']) ? (($results['totalLength'] / 1024) / 1024) : null)
				->setDownloadSpeed(isset($results['downloadSpeed']) ? $results['downloadSpeed'] . " Mo" : null)
				->setNumPieces(isset($results['numPieces']) ? $results['numPieces'] : null)
				->setPieceLength(isset($results['pieceLength']) ? $results['pieceLength'] : null)
				->setConnections(isset($results['connections']) ? $results['connections'] : null)
				->setDir(isset($results['dir']) ? $results['dir'] : null)
				->setErrorCode(isset($results['errorCode']) ? $results['errorCode'] : null)
				->setErrorMessage(isset($results['errorMessage']) ? $results['errorMessage'] : null);
		}
		return $this->render('AppBundle:Accueil/templates:right_content.html.twig', array(
			'download' => $download
		));
		// }
		throw new MethodNotAllowedHttpException(array(
			'AJAX'
		));
	}

	/**
	 * @Route("/addUrl", name="d9_add_url_app")
	 *
	 * @param Request $request        	
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function addUrlAction(Request $request)
	{
		// Aria Model
		$aria = new Aria();
		// $aria->addUri(['http://qsv2ba.alld.io/dl/utgpc625d5/Le.Dernier.Train.Du.Katanga.1991.MULTi.1080p.x264-Thewatchman.www.Zone-Telechargement.com.mkv']);
		$form = $this->createForm(AriaType::class, $aria, array(
			AriaType::ACTION => $this->generateUrl('d9_add_url_app')
		));
		
		if ($form->handleRequest($request)->isValid()) {
			$data = $form->getData();
		}
		
		if (! empty($data->getFileName())) {
			$uris = array(
				$data->getFileName()
			);
			
			$rpc = $this->cluster();
			$gid = $rpc->addUri($uris);
			dump($gid);
			$aria = new Aria();
			$aria->setGid($gid['result']);
			$result = $this->get(A::DAO_DL)->addDownload($aria);
			
			// TODO: insert gid to download table or abort download
			return $this->render('AppBundle:Accueil/templates:list.html.twig', array(
				'form' => $form->createView()
			));
		}
		return $this->render('AppBundle:Accueil/templates:addurl.html.twig', array(
			'form' => $form->createView()
		));
	}

	/**
	 * @Route("/config", name="d9_config_app")
	 *
	 * @param Request $request        	
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function editConfigAction()
	{
		$name = 'd9_config_app';
		return $this->render('AppBundle:Accueil:index.html.twig', array(
			// ...
		));
	}

	/**
	 * @Route("/logout", name="d9_logout_app")
	 *
	 * @param Request $request        	
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function logoutAction()
	{
		$name = "d9_logout_app";
		dump($name);
		
		return $this->render('AppBundle:Accueil:index.html.twig', array(
			// ...
		));
	}

	/**
	 * Cree ou recupere un cluster aria2
	 *
	 * @return \AppBundle\Service\Aria2
	 * @return nothing
	 * @author gsimar
	 */
	private function cluster()
	{
		$session = $this->get('session')->get('aria2_server');
		if (null !== $session) {
			// construction du cluster
			$aria2 = new Aria2($session);
			return $aria2;
		} else {
			$http = 'http';
			$ws = 'ws';
			$ip = '192.168.0.11';
			$serverHTTP = $http.'://'.$ip; // TODO:config element
			$serverWS = $ws.'://'.$ip;
			$port = '6800'; // TODO:config element
			$jsonPath = '/jsonrpc';
			$chaineHTTP = $serverHTTP. ':' . $port . '' . $jsonPath;
			$chaineWS = $serverWS. ':' . $port . '' . $jsonPath;
			$this->get('session')->set('aria2_server', $chaineHTTP);
			$this->get('session')->set('aria2_server_ws', $chaineWS);
		}
	}
}
