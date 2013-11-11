<?php

class Route{

    public static function start(){
        $name_controller='index';
        $name_action='index';
        $name_module='user';


        $routes = explode('/', $_SERVER['REQUEST_URI']);
        print_r($routes);

        if (!empty($routes[1]) && !empty($routes[2])) {
            $name_module=$routes[1];
            $name_controller=$routes[2];
        }
        $path_controller= 'application/modules/'.$name_module.'/controllers/'.$name_controller.'.php';

        if(file_exists($path_controller))
        {
            include $path_controller;
        }
        else{
            Route::ErrorPage404();
        }


        if (!empty($routes[3])) {
            $temp=preg_split("/\?/",$routes[3]);
            if($temp[0]){
                $name_action = $temp[0];
            }else{
                $name_action = $routes[3];
            }

        }

        $contr=Route::upperCase($name_controller).'Controller';
        $action=$name_action.'Action';

        $controller=new $contr;
        Registry::setValue('module',$name_module);

        if(method_exists($controller, $action))
        {
            // вызываем действие контроллера
            $controller->$action();
        }
        else{
            Route::ErrorPage404();
        }


    }


    function upperCase($str) {
        $m = str_split($str);
        $new = strtoupper($str[0]);

        $d = null;
        for ($var = 0; $var < count($m); $var++) {
            if ($var == 0) {
                $d = $new;
            } else {
                $d.=$str[$var];
            }
        }
        return $d;
    }
    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header('Location:'.$host.'404');
    }

}


?>
