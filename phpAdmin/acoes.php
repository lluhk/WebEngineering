<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_projeto'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));

    $sql = "INSERT INTO projetos (nome, descricao) VALUES ('$nome', '$descricao')";

    echo $sql;exit;
    mysqli_query($conexao, $sql);
}   
?>
