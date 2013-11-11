<?php

class Controller{
    private $model;
    private $view;

    public function __construct() {
        $this->view=new View();
    }

    public function getView(){
        return $this->view;
    }
}
?>