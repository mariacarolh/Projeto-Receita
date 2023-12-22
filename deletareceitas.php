<?php

$codigo = isset($_GET['codigo_receita']) ? $_GET['codigo_receita'] : null;

if ($codigo !== null) {
    require_once("conexao.php");
    $sql = "DELETE FROM receitas WHERE codigo_receita = $codigo";

    ExecutarnoBD($sql);

    header("Location: listareceitas.php");
    exit;

} else {
    echo "Código de receita não fornecido.";
}
?>


