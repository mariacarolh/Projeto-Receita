<?php

$idReceita = $_GET['id'];
require_once('conexao.php');
$sql = 'DELETE FROM Receita WHERE codigo_receita = $idReceita';

ExecutarnoBD($sql);
