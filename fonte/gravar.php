<?php 
// pegar dados na tela
$nome = $_POST["nome"]; 
$LOGIN = $_POST["login"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$perfil = $_POST["perfil"];


//abrir conexao no banco
include_once'./conexao.php';

// montar a instrucao para gravar no banco
$sql ="insert into cliente values(null,'".$nome."','".$LOGIN."','".$email."','".$senha."','".$perfil."')";
//INSERT INTO usuario values(null,'Thiago','admin',md5('123'),'adm');
//INSERT INTO usuario values(null,'Thiago','admin',md5('123'),'cliente');

//enviar resposta se foi gravado ou não
if (mysqli_query($con,$sql)) {
    echo "usuario cadastrado com sucesso";
    }else{
        echo "erro ao cadastrar o usuario";
    }

    // fecha a conexao com o banco

    mysqli_close($con);

?>