<?php

// Puxa a conexão e edita
require_once('conexao.php');

$id_receita = $_POST['id'];
$nome_receita = $_POST['nome'];
$data_receita = $_POST['data'];
$fonte_receita = $_POST['fonte'];

$sql = "UPDATE receita
SET nome = '$nome_receita',
data = '$data_receita',
fonte = '$fonte_receita'
WHERE id = $id_receita;";

ExecutarnoBD($sql);

?>