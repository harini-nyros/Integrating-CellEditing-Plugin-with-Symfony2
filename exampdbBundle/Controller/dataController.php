<?php

namespace ExtAss\exampdbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ExtAss\exampdbBundle\Entity\movies;
class dataController extends Controller
{
    public function insertAction()
    {
	
	$register = new movies();
       	$register->setTitle('title');
	 $register->setDirector('director');
	 $register->setReleased('');
	 $register->setGenre('0');
	 $register->setTagline('your tagline');
	 $em = $this->getDoctrine()->getManager();
	 $em->persist($register);
    	 $em->flush();
	return $this->render('ExtAssExampleBundle:Default:grid.html.php');
    }
   public function deleteAction()
    {
	$id=$_GET['did'];
	$em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('ExtAssexampdbBundle:movies');
	$items = $repository->delete($id);
	return $this->render('ExtAssExampleBundle:Default:grid.html.php');

    }
    public function updateAction()
    {
	$id=$_GET['id'];
	$title=$_GET['title'];
	$director=$_GET['director'];
	$released=$_GET['released'];
	$genre=$_GET['genre'];
	$tagline=$_GET['tagline'];
	$em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('ExtAssexampdbBundle:movies');
	$items = $repository->update($id,$title,$director,$released,$genre,$tagline);
	return $this->render('ExtAssExampleBundle:Default:grid.html.php');

    }
    
}
