<?php
$nome = $_POST["nome"];
$fonte = $_POST["fonte"];
$data = $_POST["data"];
$receita = $_POST["receita"];
$ingrediente = $_POST["ingrediente[]"];
$quantidade = $_POST["quantidade[]"];
$unidade = $_POST["unidade[]"];

require_once("conexao.php");
$sql = "INSERT INTO receitas (nome, fonte, data, receita, ingrediente, quantidade, unidade) VALUES ('$nome', '$fonte', '$data', '$receita', '$ingrediente', '$quantidade', '$unidade')";

ExecutarnoBD($sql);

header("Location: listareceitas.php");
exit;
