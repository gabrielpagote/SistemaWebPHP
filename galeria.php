<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("sistemas.db");
$sql = "SELECT * FROM opesis";
$sistemas = $bd->query($sql);


?>

<body>

  <!-- Cabeçalho-->
  <nav class="nav-extended grey">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active">
          <a href="galeria.php">Galeria</a></li>
        <li>
          <a href="cadastrar.php">Cadastrar</a></li>
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

  <div class="row">

    <?php  while ($sistema = $sistemas-> fetchArray()) :?>

      <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src=<?= $sistema["poster"] ?>>
            <a class="btn-floating halfway-fab waves-effect waves-light grey">
              <i class="material-icons">favorite_border</i>
            </a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $sistema["nota"] ?></p>
            <span class="card-title"><?= $sistema["titulo"] ?></span>
            <p><?= $sistema["sinopse"] ?></p>
          </div>
        </div>
      </div>
    <?php endwhile?>
  </div>

</body>

</html>