<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/SistemasController.php";

if ($rota === "/") {
    require "view/galeria.php";
    exit();
}
    
if($rota ==="/novo"){
if($metodo == "GET")require "view/cadastrar.php";
if ($metodo =="POST") {
    $controller = new SistemasController();
    $controller->save($_REQUEST);
    };
exit();
}

if (substr($rota, 0, strlen("/favoritar")) === "/favoritar") {
    $controller = new SistemasController();
    $controller->favorite(basename($rota));
    exit();

}

if (substr($rota, 0, strlen("/sistemas")) === "/sistemas") {
    if($metodo == "GET")require "view/galeria.php";
    if($metodo == "DELETE"){
        $controller = new SistemasController();
        $controller->delete(basename($rota));
    }

    exit();
}
require "view/404.php";