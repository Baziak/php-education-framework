<?php

function __autoload($file) {
     $file='application/core/'.$file.'.php';
     require_once($file);
}


try{
     $req=new Request();
     FrontController::dispatch($req);
}catch (Exception $e){
    $e->getMessage();
}


?>