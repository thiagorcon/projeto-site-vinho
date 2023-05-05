<?php 
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

$sql = 'select * from cliente where login = "'.$login.'" and senha = "'.$senha.'"';

include_once'conexao.php';


$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) == 1) {
  
    $row = mysqli_fetch_array($result);
   
    $_SESSION["login"]= $row["login"];
    $_SESSION["senha"]= $row["senha"];
    $_SESSION["tempo"]= time();//armazenando o instante do login
    header("location:menu_usuario.html");// redirecionar

} else {
    echo "Usuário/Senha inválido";
}