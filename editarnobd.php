<?php
// Puxa a conexão e edita
require_once('conexao.php');

$codigo = $_POST['codigo_receita'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$fonte = $_POST['fonte'];

$sql = "UPDATE Receitas
SET nome = '$nome',
data = '$data',
fonte = '$fonte'
WHERE codigo_receita = $codigo;";

ExecutarnoBD($sql);

header("Location: listareceitas.php");
exit;

?>