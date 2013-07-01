<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('ext_assexampdb_homepage', new Route('/hello/{name}', array(
    '_controller' => 'ExtAssexampdbBundle:Default:index',
)));

return $collection;
