<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		return $this->renderIndexView();
	}

	/**
	 * @Route("/accueil", name="d9_accueil_app")
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
