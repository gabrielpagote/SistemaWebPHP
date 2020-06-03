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
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>

                    <!-- Input Título -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>

                    <!-- Input Sinopse -->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Input Nota-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <!-- Input Capa do Filme -->
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn purple lighten-2 black-text">
                                <span>Adicionar Capa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>


                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                        <a href="#" class="waves-effect waves-light btn purple">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>