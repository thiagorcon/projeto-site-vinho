<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área compras</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    >
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="./css/styles.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <img id='logo' src="./assets/img/portfolio/logo da TR web vinhos 90x90.jpg" alt="logo site">
            <a class="navbar-brand" href="#page-top"> TR web vinhos </a>

            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./index.html">Voltar para página principal</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="masthead bg-primary text-white text-center">

        <div class="container d-flex align-items-center flex-column">

            <!-- <img src="assets/img/portfolio/banner 1280x400.jpg" width="1400" height="500" alt="banner site" /> -->

            <h1 class="masthead-heading text-uppercase mb-0">TR Web vinhos</h1>



            <p class="masthead-subheading font-weight-light mb-0">Seu lugar para comprar vinho na web</p>
        </div>
    </header>
    <br><br><br>

    <?php

$selecao = $_POST["selecao"];
$quantidade = $_POST["quantidade"];

// recebo da tela o id para fazer a edição
$id = $_GET["id"];
// abrir conexão com o banco
include_once 'fonte/conexao.php';
// montar instrução para pegar os dados do produto para expor na tela.
$sql = "select * from produto where idproduto =".$id;

$rs = mysqli_query($con, $sql); 
if (mysqli_num_rows($rs) == 1) {
    $row = mysqli_fetch_array($rs);
}
?>
<br><br>
<h3>Atualizar dados do produtos</h3>
<form action="atualizar.php" method="post" class="form-group">

<input type="hidden" name="id" value="<?php echo $row["idproduto"]; ?>" >

<br><br>
    Nome do produto: <br>
    <input type="text" name="selecao" id="selecao"  value="<?php echo $row["selecao"]; ?>" class="form-control">
    <br><br>
    Estoque: <br>
    <input type="text" name="quantidade" id="quantidade" value="<?php echo $row["quantidade"]; ?>" class="form-control">
    <br><br>
    Valor: <br>
    <input type="text" name="valor" id="" value="<?php echo $row["valor"]; ?>" class="form-control">
    <br><br>
    Categoria: <br>
    <select name="categoria" id="">
        <opition value ="<?php echo $row['categoria']; ?>">
                <?php echo $row["categoria"]; ?>"</opition> 
        <option value="eletronico">Eletronico</option>
        <option value="roupas">Roupas</option>
        <option value="livros">Livros</option>
    </select>

    <br><br>

    <input type="submit" class="btn btn-primary" value="Atualizar produto">
    <input type="reset" class="btn btn-danger" value="Limpar campos">

</form>




<?php
include_once'rodape.php';
?>