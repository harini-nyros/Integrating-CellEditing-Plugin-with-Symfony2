<?php

namespace ExtAss\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class displaygridController extends Controller
{
    public function displayAction()
    {
      return $this->render('ExtAssExampleBundle:Default:grid.html.php');
    }
}
