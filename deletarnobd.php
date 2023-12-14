<?php

$idReceita = $_GET['id'];
require_once('conexao.php');
$sql = 'DELETE FROM Receita WHERE id = $idReceita';

ExecutarnoBD($sql);

?>