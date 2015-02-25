<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author madalin
 */
class Home extends BaseController {
    protected function Index() {
        $viewmodel = new HomeModel();
        $this->ReturnView($viewmodel->Index(), TRUE);
    }
}
