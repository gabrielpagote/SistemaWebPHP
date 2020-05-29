<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <title>UranioCine</title>
</head>
<body>
<nav class="nav-extended purple lighten-2">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
        </div>
        <div class="nav-header center">
      <h1> URANIOCINE </h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>


    <div class="row">
    <div class="col s3">
                <div class="card hoverable">
                     <div class="card-image">
                     <img src="https://image.tmdb.org/t/p/w400/mI1Ktgg7LuhwAhUgke4rHUxlDUr.jpg">
                     <a class="btn-floating halfway-fab waves-effect waves-light red">
                     <i class="material-icons">favorite_border</i></a>
                     </div>
                 <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i> 9,2</p>
                    <span class="card-title">Vingadores</span>
                    <p>Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos.
                     Com Tony Stark vagando perdido no espaço sem água e comida, 
                     Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
            </div>
                 </div>
        </div>
        <div class="col s3">
                <div class="card hoverable">
                     <div class="card-image">
                     <img src="https://image.tmdb.org/t/p/w400/dJ3VPQTg2gST26IKIk75TNHViB0.jpg">
                     <a class="btn-floating halfway-fab waves-effect waves-light red">
                     <i class="material-icons">favorite_border</i></a>
                     </div>
                 <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i> 9,2</p>
                    <span class="card-title">AD Astra</span>
                    <p>Um homem viaja pelo interior de um sistema solar sem lei para encontrar seu pai desaparecido
                     - um cientista renegado que representa uma ameaça à humanidade.</p>
            </div>
                 </div>
        </div>
    
    </div>
    
    
</body>
</html>