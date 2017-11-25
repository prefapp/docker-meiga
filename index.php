<?php

    define("VERSION", "1.0");

    function version(){
        echo VERSION;
    }

    function docente(){
        echo $_ENV["usuario"];
    }

?>

<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/base.css">

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-3 align-text-bottom">
                </div>
                <div class="col-6">

                    <header>Benvid@ a Docker-Meiga!!</header>


                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-3 align-text-bottom">
                    <p class="version align-text-bottom">v <?php version() ?></p>
                </div>
                <div class="col-6">
                </div>
                <div class="col-3 align-text-bottom">
                    <p class="docente">Docente: <?php docente() ?></p>
                </div>
            </div>

        </div>
        

    </body>

</html>





