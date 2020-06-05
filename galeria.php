<?php include "cabecalho.php" ?>

<?php

$filme1 = [
  "titulo" => "Vingadores: Ultimato",
  "nota" => "9.6",
  "sinopse" => "Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos.
    Com Tony Stark vagando perdido no espaço sem água e comida,
    Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco",
  "poster" => "https://image.tmdb.org/t/p/w400/mI1Ktgg7LuhwAhUgke4rHUxlDUr.jpg",
];

$filme2 = [
  "titulo" => "AD Astra",
  "nota" => "6.5",
  "sinopse" => "Um homem viaja pelo interior de um sistema solar sem lei para encontrar seu pai desaparecido
    - um cientista renegado que representa uma ameaça à humanidade.",
  "poster" => "https://image.tmdb.org/t/p/w400/dJ3VPQTg2gST26IKIk75TNHViB0.jpg",
];

$filme3 = [
  "titulo" => "Viúva Negra",
  "nota" => "9.1",
  "sinopse" => "Em Viúva Negra, após seu nascimento, Natasha Romanoff (Scarlett Johansson) é dada à KGB,
    que a prepara para se tornar sua agente definitiva.",
  "poster" => "https://image.tmdb.org/t/p/w400/nfiwuRN59pcw3ETIDTThNOm2vai.jpg",
];

$filme4 = [
  "titulo" => "Mulan",
  "nota" => "8.2",
  "sinopse" => "Hua Mulan é a espirituosa e determinada filha mais velha de um honrado guerreiro.
    Quando o Imperador da China emite um decreto que um homem de cada família deve servir
    no exército imperial, Mulan decide tomar o lugar de seu pai, que está doente.",
  "poster" => "https://image.tmdb.org/t/p/w400/iAoopZZ0tNFFYnOIsOr1wpRbdx7.jpg",
];

$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>

  <!-- Cabeçalho-->
  <nav class="nav-extended purple lighten-2">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active">
          <a href="galeria.php">Galeria</a></li>
        <li>
          <a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1> URANIOCINE </h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <!-- Posters de filmes-->

  <div class="row">

    <?php foreach ($filmes as $filme) : ?>

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
    <?php endforeach ?>
  </div>

</body>

</html>