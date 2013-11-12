<?php

require_once 'application/core/View.php';

require_once 'application/core/Registry.php';
require_once 'application/core/FrontController.php';
require_once 'application/core/Request.php';

/*
function __autoload($file) {
    include $file .'.php';
}
*/

try{
     $req=new Request();
     FrontController::dispatch($req);
}catch (Exception $e){
    $e->getMessage();
}


?>