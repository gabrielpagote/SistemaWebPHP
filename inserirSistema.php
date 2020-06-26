<?php

session_start();
require "./repository/SistemasRepositoryPDO.php";
require"./model/sistema.php";

$sistemasRepository = new SistemasRepositoryPDO();
$sistema = new Sistema();


$sistema->titulo     = $_POST["nome"];
$sistema->sinopse    = $_POST["sinopse"];
$sistema->nota       = $_POST["nota"];
$sistema->poster     = $_POST["poster"];

if($sistemasRepository->salvar($sistema))
    $_SESSION["msg"] = "Filme cadastrado com sucesso";
else
    echo "\n falha ao inserir sistemas\n";
    
    header("Location: /");