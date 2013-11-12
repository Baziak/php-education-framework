<?php

class View{

    public function display($content,$data=array()){
        $module=Registry::getValue('module');
        include $_SERVER['DOCUMENT_ROOT']."/template.php";
    }
}
?>
