<?php 
$nome = $_POST["nome"];
$fonte = $_POST["fonte"];
$data = $_POST["data"];
$receita = $_POST["receita"];
$ingredientes = $_POST["ingredientes"];
$quantidade = $_POST["quantidade"];
$unidade = $_POST["unidade"];
require_once("conexao.php");
$sql = "INSERT INTO receitas (nome, fonte, data, receita) VALUES ('$nome', '$fonte', '$data', '$receita')";

$id_receita = ExecutarnoBD($sql);

for ($i=0; $i < count($_POST ['ingredientes']); $i++) {
    $sql = "INSERT INTO ingredientes (ingredientes, quantidade, unidade, codigo_receita) VALUES ('$ingredientes[$i]', '$quantidade[$i]', '$unidade[$i]', $id_receita)"; 
    ExecutarnoBD($sql);
}

header("Location: listareceitas.php");
exit;

?>
