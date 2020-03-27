<?php

namespace App;

use Chengenius\Request\Request;
use \Smarty;


class Controller
{
    protected $_request;
    protected $_view;

    public function __construct()
    {
        // init smarty instance
        $this->_view = new Smarty();
        $this->_setSmarty();

        // init request instance
        $this->_request = new Request();

        // fake construct function
        $this->__init();
    }

    public function __init(){}

    /**
     * smarty template engine setting options
     */
    protected function _setSmarty()
    {
        $dir = str_replace('\\', '/', __DIR__);
        $this->_view->left_delimiter = "{{";
        $this->_view->right_delimiter = "}}";
        $this->_view->template_dir = $dir . '/View/templates';
        $this->_view->compile_dir = $dir . '/View/templates_c';
    }
}