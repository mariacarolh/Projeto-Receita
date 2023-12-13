<?

function GerarConexao(){
$nomedoservidor = "localhost";
$nomedousuario = "root";
$senha = "";
$banco = "projetoreceita";

$conexao = mysqli_connect($nomedoservidor, $nomedousuario, $senha, $banco);

return $conexao;

}

function ExecutarnoBD($sql){

    $conexao = GerarConexao();

    // Executar a Query
    mysqli_query($conexao, $sql);

    // Fechar a conexão
    mysqli_close($conexao);
}

function BuscarNoBD($sql){

    $conexao = GerarConexao();
    // Executar o código
$resultado = mysqli_query($conexao, $sql);

// Converter o resultado para um tipo que a gente entenda
// Arrays

$lista = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
return $lista;

}
?>