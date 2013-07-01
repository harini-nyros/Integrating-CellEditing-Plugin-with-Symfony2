<?php

namespace ExtAss\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ExtAss\exampdbBundle\Entity\movies;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class dispjsonController extends Controller
{
    
    public function sendjsonAction()
    {
	$request = $this->getRequest();
	$em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('ExtAssexampdbBundle:movies');
	$items = $repository->show();
	$serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
JsonEncoder()));
	$response = new Response($serializer->serialize($items, 'json')); 
    $response->headers->set('Content-Type', 'application/json');
    return $response; 
    }
}
