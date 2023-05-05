<?php 
// pegar dados na tela
$selecao = $_POST["selecao"];
$quantidade = $_POST["quantidade"];


   

//abrir conexao no banco
include_once'./conexao.php';

// montar a instrucao para gravar no banco
$sql ="insert into produto values(null,'".$selecao."','".$quantidade."')";
//enviar resposta se foi gravado ou não
if (mysqli_query($con,$sql)) {
    echo "Produto cadastrado com sucesso";
    }else{
        echo "erro ao cadastrar o produto";
    }

    

    mysqli_close($con);

?>