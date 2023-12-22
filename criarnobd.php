<?php
$nome = $_POST["nome"];
$fonte = $_POST["fonte"];
$data = $_POST["data"];


require_once("conexao.php");
$sql = "INSERT INTO receitas (nome, fonte, data) VALUES ('$nome', '$fonte', '$data')";

ExecutarnoBD($sql);

header("Location: listareceitas.php");
exit;
