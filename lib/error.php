<?php

    function detalles_error(){

        if(!isset($_ENV["DOCENTE"])){

            mostrar_error("Falta a configuración do docente");

        }

        if(!isset($_ENV["CURSO"])){
            mostrar_error("Falta a configuración do curso");
        }

    }

    function mostrar_error($texto){

        echo "<li>" . $texto . "</li>";
    }

    function volver(){

        echo '<li><a href="/">Reintentar</a></li>';

    }

?>

<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/base.css">

    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <p class="titulo error">Erro</p>
                </div>
            </div>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <ul class="detalles error">
                        <?php detalles_error() ?>
                    </ul>
                    <p>
                        <?php volver() ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="lienzo">
            <div class="lua"></div>
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
        </div>        

    </body>

</html>





