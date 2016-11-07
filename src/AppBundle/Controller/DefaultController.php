<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\Aria;
use AppBundle\Form\AriaType;
use AppBundle\Service\Aria2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use AppBundle\AppBundle;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * 
     */
    public function indexAction(Request $request) {
    	// requeter la base de donnée pour checker la base pour le user ?? bizarre
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
    /**
     * @Route("/accueil", name="d9_accueil_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function accueilAction (Request $request) {
//    	var_dump($aria->getGlobalStat());
    	return $this->render('AppBundle:Accueil/templates:list.html.twig', array(
    			//...
    	));
    }
    /**
     * @Route("/generalInfo", name="d9_info_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getInfo(Request $request) {
    	if ($request->isXmlHttpRequest()) {
    		//from DATABASE
    		$aria = new Aria();
    		$aria_array = $this->get(AppBundle::DAO_DL)->getDownloadList($aria);
    		// from RPC
	    	$rpc = $this->newCluster();
	    	
	    	//$stats = $rpc->getGlobalStat(); //ok
	    	//$options = $rpc->getGlobalOption(); //ok
	    	//$active = $rpc->tellActive(); //ok
	    	//$session = $rpc->getSessionInfo();
	    	//$version = $rpc->getVersion();
	    	//$waiting = $aria->tellWaiting(); // required gid
	    	//$stop = $aria->tellStopped(); // required gid
	    	//$status = $aria->tellStatus(); // required gid
	    	
	    	$rpc->destruct();
	    	$response = new Response(json_encode(array(
	    		//	'stats' => $stats,
	    		//	'active' => $active,
	    		//	'options' => $options,
	    		//	'sesssion' => $session,
	    		//	'keys' => $keys,
	    		//	'version' => $version,
	    			'DLList' => $aria_array,
	    			//'waiting' => $waiting,
	    			//'stop' => $stop
	    			
	    	)));
	    	return $response;
	    }
    	throw new MethodNotAllowedHttpException(array('AJAX'));
    }
    /**
     * @Route("/statusInfo", name="d9_status_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getStatus(Request $request) {
    	dump('here');
    	if ($request->isXmlHttpRequest()) {
    		$status_list = array();
    		$id = $request->query->get('gid');
    		dump($id);
    		if (!isset($id) || $id === null){
	    		$response = new Response(json_encode(array(
	    			'status' => $status_list
	    		)));
	    		return $response;
    		}
    		
    		// from RPC
    		$rpc = $this->newCluster();
	    	foreach ($id as $gid){
	    		$status = $rpc->tellStatus($gid);
	    		dump($status);
	    		array_push($status_list, $status);
	    	}
    		$response = new Response(json_encode(array(
    			'status' => $status_list
    		)));
    		return $response;
    	}
    	throw new MethodNotAllowedHttpException(array('AJAX'));
    }
    
    /**
     * @Route("/addUrl", name="d9_add_url_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addUrlAction(Request $request) {
    	// Aria Model
    	$aria = new Aria();
    	//$aria->addUri(['http://qsv2ba.alld.io/dl/utgpc625d5/Le.Dernier.Train.Du.Katanga.1991.MULTi.1080p.x264-Thewatchman.www.Zone-Telechargement.com.mkv']);
    	$form = $this->createForm(AriaType::class, $aria, array(
    			AriaType::ACTION => $this->generateUrl('d9_add_url_app')
    	));
    	
    	if($form->handleRequest($request)->isValid()) {
    		$data = $form->getData();
    	}
    	
    	if (empty($data)) {
    		$this->createForm(AriaType::class, $aria);
    		
    		return $this->render('AppBundle:Accueil/templates:addurl.html.twig', array(
    				'form'	=>	$form->createView()
    		));
    	}
    	
    	if(!empty($data->getFileName())) {
    		$uris = array($data->getFileName());
    		
    		$rpc = $this->newCluster();
    		$gid = $rpc->addUri($uris);
    		dump($gid);
    		return $this->render('AppBundle:Accueil/templates:list.html.twig', array(
    				'form'	=>	$form->createView()
    		));
    	}
    	return $this->render('AppBundle:Accueil/templates:addurl.html.twig', array(
    			'form'	=>	$form->createView()
    	));
    }
    
    /**
     * @Route("/config", name="d9_config_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editConfigAction() {
    	$name = 'd9_config_app';
    	return $this->render('AppBundle:Accueil:index.html.twig', array(
    			//...
    	));
    	
    }
    
    /**
     * @Route("/logout", name="d9_logout_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function logoutAction() {
    	$name="d9_logout_app";
    	dump($name);
    	
    	return $this->render('AppBundle:Accueil:index.html.twig', array(
    			//...
    	));
    }
    
    public function newCluster(){
    	
    	if(null !== $this->get('session')->get('aria2_server')) {
    		// construction du cluster
    		$aria2 = new Aria2($this->get('session')->get('aria2_server'));
    		return $aria2;
    	} else {
    		$server='http://192.168.0.11';
    		$port = '6800';
    		$jsonPath = '/jsonrpc';
    		$chaine = $server .':'.$port.''.$jsonPath;
    		$this->get('session')->set('aria2_server', $chaine);
    	}
    }
}
