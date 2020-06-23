<?php

$bd = new SQLite3("sistemas.db");

$titulo     = $bd->escapeString($_POST["nome"]);
$sinopse    = $bd->escapeString($_POST["sinopse"]);
$nota       = $bd->escapeString($_POST["nota"]);
$poster     = $bd->escapeString($_POST["poster"]);


$sql = "INSERT INTO opesis (titulo, poster, sinopse, nota) 
VALUES (:titulo, :poster, :sinopse, :nota)";

$stmt = $bd->prepare($sql);
$stmt ->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmt ->bindValue(':sinopse', $sinopse, SQLITE3_TEXT);
$stmt ->bindValue(':nota', $nota, SQLITE3_FLOAT);
$stmt ->bindValue(':poster', $poster, SQLITE3_TEXT);

if ($stmt->execute())
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n" . $bd-> lastErrorMsg();

    header("Location: galeria.php?msg=Sistema+Operacional+cadastrado+com+sucesso");