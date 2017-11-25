<?php

$a = array(1,3,3,4,5);
$unicos = array();

for($i = 0 ; $i < count($a); $i++){
    $comparando = $a[$i];
    $unico = true;

    for($j = 0; $j < count($a) && $unico; $j++){

        if($j !== $i && $a[$j] == $comparando){
            $unico = false;
        }
        
    }

    if($unico){
        array_push($unicos, $comparando);
    }

}

# muestra el array de numeros únicos
for($i = 0; $i < count($unicos); $i++){
    echo $unicos[$i] . "<bR/>";
}

?>

<!--
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    </head>

    <body>

        <header>Benvid@ a Docker-Meiga!!</header>
        

    </body>

</html>--!





