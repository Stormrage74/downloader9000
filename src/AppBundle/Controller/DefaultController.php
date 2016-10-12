<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Model\Aria;
use AppBundle\Form\AriaType;
use AppBundle\Service\Aria2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
     * @Route("/addUrl", name="d9_add_url_app")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addUrlAction(Request $request) {
    	// Aria Model
    	$aria = new Aria(null, "");
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
    		 
    		if(null !== $this->get('session')->set('aria2_cur_run', $aria)) {
    			$uris = array($data->getFileName());
    			$this->aria2->addUri([$uris]);
    			dump($aria->getGlobalStat());
    		} else {
    			$server='http://192.168.0.11';
    			$port = '6800';
    			$jsonPath = '/jsonrpc';
    			$chaine = $server .':'.$port.''.$jsonPath;
    			dump($chaine);
    			// construction du cluster
    		//	$aria2 = new Aria2($chaine);
    			// mise en session
    			$this->get('session')->set('aria2_server', $chaine);
    			//$this->get('session')->set('aria2_cur_run', $aria2);
    		}
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
    	dump($name);
    	 
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
}
