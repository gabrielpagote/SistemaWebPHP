<?php

$bd = new SQLite3("./db/sistemas.db");

$sql = "ALTER TABLE sistemas ADD COLUMN favorito INT DEFAULT 0";

if ($bd->exec($sql)) 
    echo "\ntabela sistemas alterada com sucesso\n"; 
else
    echo "\nerro ao alterar tabela sistemas\n"; 