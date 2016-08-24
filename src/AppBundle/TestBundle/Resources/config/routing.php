<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('test_homepage', new Route('/', array(
    '_controller' => 'TestBundle:Default:index',
)));

return $collection;
