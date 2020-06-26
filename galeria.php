<?php include "cabecalho.php" ?>

<?php

session_start();
require "./repository/SistemasRepositoryPDO.php";
require "./util/Mensagem.php";

$sistemasRepository = new SistemasRepositoryPDO();
$sistema = $sistemasRepository->listarTodos();

?>

<body>

  <!-- Cabeçalho-->
  <nav class="nav-extended grey">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active">
          <a href="/">Galeria</a></li>
        <li>
          <a href="/novo">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1> Uranium Systems </h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent grey darken-1">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Testados</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <!-- Posters de sistemas operacionais-->
  <div class="container">

    <div.container class="row">

      <?php foreach ($sistemas as $sistema) : ?>

        <div class="col s12 m2 l3">
          <div class="card hoverable">
            <div class="card-image">
              <img src=<?= $sistema->poster ?>>
              <a class="btn-floating halfway-fab waves-effect waves-light grey">
                <i class="material-icons">favorite_border</i>
              </a>
            </div>
            <div class="card-content">
              <p class="valign-wrapper"><i class="material-icons amber-text">star</i>
                <?= $sistema->nota ?></p>
              <span class="card-title"><?= $sistema->titulo ?></span>
              <p><?= $sistema->sinopse ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
  </div>

  </div>

  <?= Mensagem::mostrar(); ?>

</body>

</html>