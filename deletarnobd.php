<?php

$idReceita = $_GET['id'];
require_once('conexao.php');
$sql = 'DELETE FROM receita WHERE id = $idReceita';

ExecutarnoBD($sql);

?>