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

    
$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    1,
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

    
?>