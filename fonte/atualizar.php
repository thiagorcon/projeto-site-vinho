<?php
// resgatar os dados da tela
$id = $_POST["idvenda"];
$selecao = $_POST["selecao"];
$quantidade = $_POST["quantidade"];
// $valor = $_POST["valor"];
// $categoria = $_POST["categoria"];

// montar o sql da atualização

$sql = "UPDATE produto set Produto = ' ".$selecao." ', Quantidade = ' ".$quantidade." ' where idvenda =".$id;

//abrir conexao com o banco de dados
include_once'../fonte/conexao.php';

//executar
if(mysqli_query($con,$sql)){
    $msg = "atualizado com sucesso!";
}else{
    $msg = "erro ao atualizar.";
}

mysqli_close($con);

echo"<script>
alert('".$msg."');
location.href='consultarProduto.php';
</script>"

?>