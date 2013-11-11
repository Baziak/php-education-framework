<?php
require_once 'application/libs/route.php';
require_once 'application/libs/view.php';
require_once 'application/libs/controller.php';
require_once 'application/libs/registry.php';


try{
    Route::start();
}catch (Exception $e){
    $e->getMessage();
}


?>