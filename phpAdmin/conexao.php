<?php

    $hostname = "localhost";
    $bancodedados = "webengineering";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli -> connect_errno) {
        echo "Falha ao Conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }

?>