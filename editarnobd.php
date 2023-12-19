<?php

// Puxa a conexão e edita
require_once('conexao.php');

$id_receita = $_POST['id'];
$nome_receita = $_POST['nome'];
$data_receita = $_POST['data'];
$fonte_receita = $_POST['fonte'];

$sql = "UPDATE Receita
SET nome = '$nome_receita',
data = '$data_receita',
fonte = '$fonte_receita'
WHERE codigo_receita = $id_receita;";

ExecutarnoBD($sql);
