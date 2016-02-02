<?php

namespace Albert\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlbertBundle:Default:index.html.twig');
    }
    
    public function sayHelloAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
    
    public function checkTwigAction($name)
    {
        return $this->render('AlbertBundle:Default:firstTwig.html.twig', array(
				'name' => $name,
			));
    }
}
