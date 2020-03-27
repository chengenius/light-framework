<?php
namespace App;

class Routes
{
    static public function getRoutes($r, $conf)
    {
        foreach ($conf as $v) {
            $r->addRoute($v['method'], $v['uri'], $v['action']);
        }
    }
}