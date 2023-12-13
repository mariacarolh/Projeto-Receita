<?php
$nome_receita = $_POST["nome"];
$data_receita = $_POST["data"];
$fonte_receita = $_POST["fonte"];

require_once("conexao.php");
$sql = "INSERT INTO Tarefa (nome, data) VALUES ('$nome_receita', '$data_receita', '$fonte_receita')";

ExecutarnoBD($sql);