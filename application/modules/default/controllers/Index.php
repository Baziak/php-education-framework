<?php

class IndexController{

    public function indexAction(){
        $v=new View();
        $v->display('home.php');
    }
}
