<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

    if ($bd->exec($sql))
        echo "\nTabela de filmes deletada\n";


    $sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql))
    echo "\nTabela de filmes criada\n";
else
    echo "\nErro ao criar tabela de filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'Bootstrap',
    'https://image.tmdb.org/t/p/w400/8xvQsbAT0TJjKmUH8SOtnSl8nRj.jpg',
    'Quando um escritor em dificuldades recebe uma máquina do tempo
     por um misterioso homem encapuzado, ele faz uma jornada para encontrar a identidade do homem
      e o significado do destino.',
    10.0
)";

if ($bd->exec($sql))
echo "\nFilmes inseridos com sucesso\n";
else
echo "\nErro ao inserir filmes\n";    

    
$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    
    'Viúva Negra',
    'https://image.tmdb.org/t/p/w400/nfiwuRN59pcw3ETIDTThNOm2vai.jpg',
    'Em Viúva Negra, após seu nascimento, Natasha Romanoff (Scarlett Johansson) é dada à KGB,
    que a prepara para se tornar sua agente definitiva.',
    9.1
)";

if ($bd->exec($sql))
    echo "\nFilmes inseridos com sucesso\n";
else
    echo "\nErro ao inserir filmes\n";    

    $sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    
        '1917',
        'https://image.tmdb.org/t/p/w400/8KkyXE7Hd9MPOOkORxkMM6SUXAB.jpg',
        'Os cabos Schofield e Blake são jovens soldados britânicos
         durante a Primeira Guerra Mundial. 
         Quando eles são encarregados de uma missão aparentemente impossível.',
        7.9
)";

if ($bd->exec($sql))
    echo "\nFilmes inseridos com sucesso\n";
else
    echo "\nErro ao inserir filmes\n";  

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    
    'Resgate',
    'https://image.tmdb.org/t/p/w400/zxahunlqvMPWzUBd1XSRsGawdS9.jpg',
    'Em Bangladesh, o mercenário Tyler Rake luta para sobreviver durante a missão
     para resgatar o filho de um chefão do crime.',
      7.4
)";   
 
 if ($bd->exec($sql))
 echo "\nFilmes inseridos com sucesso\n";
else
 echo "\nErro ao inserir filmes\n";  

?>