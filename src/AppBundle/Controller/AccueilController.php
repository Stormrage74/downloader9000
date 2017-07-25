<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class AccueilController extends BaseController
{
	
	/**
	 * @Route("/", name="d9_index")
	 */
	public function defaultAction(Request $request)
	{
		return $this->renderIndexView();
	}
	
	 /**
	 * @Route("/index", name="d9_homepage")
     * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
     */
	public function indexAction ()
	{
		return $this->renderIndexView();
	}
	
	/**
	 * @Route("/accueil", name="d9_accueil")
	 *
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function accueilAction(Request $request)
	{
		return $this->renderIndexView();
	}
	
	private function renderIndexView(){
		return $this->render('AppBundle:Accueil:index.html.twig', array(
		));
	}
	
	
	
}

