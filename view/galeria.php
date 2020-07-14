<?php include "cabecalho.php" ?>

<?php
session_start();
require "./util/Mensagem.php";

$controller = new SistemasController();
$sistemas = $controller->index();
?>

<body>

  <!-- Cabeçalho-->
  <nav class="nav-extended gray lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>URANIUM</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent gray darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <!-- Posters de sistemas operacionais-->

  <div class="container">
    <div class="row">

      <?php if (!$sistemas) echo "<p class='card-panel gray lighten-4'>Nenhum sistema operacional cadastrado</p>" ?>

      <?php foreach ($sistemas as $sistema) : ?>
        <div class="col s12 m6 l3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?= $sistema->poster ?>">
              <button class="btn-fav btn-floating halfway-fab waves-effect waves-light gray" data-id="<?= $sistema->id ?>">
                <i class="material-icons"><?= ($sistema->favorito) ? "favorite" : "favorite_border" ?></i>
              </button>
            </div>
            <div class="card-content">
              <p class="valign-wrapper">
                <i class="material-icons amber-text">star</i> <?= $sistema->nota ?>
              </p>
              <span class="card-title"><?= $sistema->titulo ?></span>

              <p><?= $sistema->sinopse ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

  </div>


  </div>

  <?= Mensagem::mostrar(); ?>

  <script>
    document.querySelectorAll(".btn-fav").forEach(btn => {
      btn.addEventListener("click", e => {
        const id = btn.getAttribute("data-id")
        fetch(`/favoritar/${id}`)
          .then(response => response.json())
          .then(response => {
            if (response.success === "ok") {
              if (btn.querySelector("i").innerHTML === "favorite") {
                btn.querySelector("i").innerHTML = "favorite_border"
              } else {
                btn.querySelector("i").innerHTML = "favorite"
              }
            }
          })
          .catch(error => {
            M.toast({
              html: 'Erro ao favoritar'
            })
          })

      });
    });
  </script>

</body>

</html>