<?php

//'GET', '/index/index', 'IndexController.index'
$route = array(
    ['method' => 'GET',  'uri' => '/',           'action' => 'IndexController.index'],
    ['method' => 'GET',  'uri' => '/index/test', 'action' => 'IndexController.test'],
);