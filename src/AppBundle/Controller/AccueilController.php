<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AccueilController extends Controller
{
	 /**
     * @Route("/toto", name="homepage")
     */
	public function indexAction ()
	{
		return $this->render('AppBundle:Accueil:index.html.twig', array(
				//...
		));
	}
	
	
	
}

