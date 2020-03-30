<?php

namespace App;

use think\Db;

class Model
{
    protected  static $db;

    public function __construct($tableName)
    {
        $db_conf = config('db_conf');
        if (! (self::$db instanceof Db)) {
            Db::setConfig($db_conf);
            self::$db = Db::table($tableName);
        }
        $this->__init();
    }

    protected function __init(){}
}