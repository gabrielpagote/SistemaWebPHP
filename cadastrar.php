<?php include "cabecalho.php" ?>

<body>

    <!-- Cabeçalho-->
    <nav class="nav-extended grey">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a href="galeria.php">Galeria</a></li>
                <li class="active">
                    <a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1> Uranium Systems </h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent grey darken-1">
                <li class="tab"><a href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <form action="inserirSistema.php" method="POST">

            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>

                        <!-- Input Título -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Nome do Sistema Operacional</label>
                            </div>
                        </div>

                        <!-- Input Sinopse -->
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Descrição</label>
                                </div>
                            </div>
                        </div>

                        <!-- Input Nota-->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                                <label for="nota">Nota</label>
                            </div>
                        </div>

                        <!-- Input Capa -->
                            <div class="file-field input-field">
                                <div class="btn grey darken-1 white-text">
                                    <span>Adicionar Capa</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input name="poster" class="file-path validate" type="text">
                                </div>
                            </div>

                        <div class="card-action">
                            <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                            <button type="submit" href="" class="waves-effect waves-light btn grey">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>