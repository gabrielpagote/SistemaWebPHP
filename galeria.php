<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);


$filme1 = [
  "titulo" => "Bootstrap",
  "nota" => "10",
  "sinopse" => "Quando um escritor em dificuldades recebe uma máquina do tempo
   por um misterioso homem encapuzado, ele faz uma jornada para encontrar a identidade do homem
    e o significado do destino.",
  "poster" => "https://image.tmdb.org/t/p/w400/8xvQsbAT0TJjKmUH8SOtnSl8nRj.jpg",
];

$filme2 = [
  "titulo" => "Viúva Negra",
  "nota" => "9.1",
  "sinopse" => "Em Viúva Negra, após seu nascimento, Natasha Romanoff (Scarlett Johansson) é dada à KGB,
    que a prepara para se tornar sua agente definitiva.",
  "poster" => "https://image.tmdb.org/t/p/w400/nfiwuRN59pcw3ETIDTThNOm2vai.jpg",
];

$filme3 = [
  "titulo" => "1917",
  "nota" => "7.9",
  "sinopse" => "Os cabos Schofield e Blake são jovens soldados britânicos
   durante a Primeira Guerra Mundial. Quando eles são encarregados de uma missão aparentemente impossível.",
  "poster" => "https://image.tmdb.org/t/p/w400/8KkyXE7Hd9MPOOkORxkMM6SUXAB.jpg",
];

$filme4 = [
  "titulo" => "Resgate",
  "nota" => "7.4",
  "sinopse" => "Em Bangladesh, o mercenário Tyler Rake luta para sobreviver durante a missão
   para resgatar o filho de um chefão do crime.",
  "poster" => "https://image.tmdb.org/t/p/w400/zxahunlqvMPWzUBd1XSRsGawdS9.jpg",
];




//$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>

  <!-- Cabeçalho-->
  <nav class="nav-extended red lighten-2">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active">
          <a href="galeria.php">Galeria</a></li>
        <li>
          <a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1> UranioCINE </h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent red darken-1">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <!-- Posters de filmes-->

  <div class="row">

    <?php  while ($filme = $filmes-> fetchArray()) :?>

      <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src=<?= $filme["poster"] ?>>
            <a class="btn-floating halfway-fab waves-effect waves-light red">
              <i class="material-icons">favorite_border</i>
            </a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $filme["nota"] ?></p>
            <span class="card-title"><?= $filme["titulo"] ?></span>
            <p><?= $filme["sinopse"] ?></p>
          </div>
        </div>
      </div>
    <?php endwhile?>
  </div>

</body>

</html>