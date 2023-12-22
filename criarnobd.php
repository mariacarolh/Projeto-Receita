<?php
$nome = $_POST["nome"];
$fonte = $_POST["fonte"];
$data = $_POST["data"];
$receita = $_POST["receita"];

require_once("conexao.php");
$sql = "INSERT INTO receitas (nome, fonte, data, receita) VALUES ('$nome', '$fonte', '$data', '$receita')";

ExecutarnoBD($sql);

header("Location: listareceitas.php");
exit;
