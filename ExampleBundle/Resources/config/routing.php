<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('ext_ass_example_homepage', new Route('/hello/{name}', array(
    '_controller' => 'ExtAssExampleBundle:Default:index',
)));

return $collection;
