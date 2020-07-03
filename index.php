<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/SistemasController.php";

switch ($rota) {
    case "/":
        require "view/galeria.php";
        break;

    case "/novo":
        if ($metodo == "GET") require "view/cadastrar.php";
        if ($metodo == "POST") {
            $controller = new SistemasController();
            $controller->save($_REQUEST);
        };

        break;

    default:
        require "view/404.php";
        break;
}
