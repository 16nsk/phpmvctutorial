<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of basecontroller
 *
 * @author madalin
 */
abstract class BaseController {
    protected $urlvalues;
    protected $action;
    
    public function __construct($action, $urlvalues) {
        $this->action = $action;
        $this->urlvalues = $urlvalues;
    }
    
    public function ExecuteAction() {
        return $this->{$this->action}();
    }
    
    protected function ReturnView($viewmodel, $fullview) {
        $viewloc = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if ($fullview) {
            require 'views/maintemplate.php';
        } else {
            require $viewloc;
        }
    }
}
