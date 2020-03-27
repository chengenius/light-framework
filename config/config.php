<?php

//'GET', '/index/index', 'IndexController.index'
$route_conf = array(
    ['method' => 'GET',  'uri' => '/index',          'action' => 'IndexController.index'],
    ['method' => 'GET',  'uri' => '/',               'action' => 'IndexController.index'],
    ['method' => 'POST', 'uri' => '/index/register', 'action' => 'IndexController.register'],
);