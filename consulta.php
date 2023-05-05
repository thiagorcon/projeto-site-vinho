<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de consulta</title>

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
            <img id='logo' src="assets/img/portfolio/logo da TR web vinhos 90x90.jpg" alt="logo site">
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
                            href="index.html">Voltar para página principal</a></li>
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

    <div class="container">


        <?php

        // montar instrução para trazer todo produto
        $sql = "select * from produto";
        // abrir conexao com o banco
        include_once './fonte/conexao.php';

        // executar a consulta ao banco de dados
        $rs = mysqli_query($con, $sql);

        if (mysqli_num_rows($rs) > 0) { ?>
            <table class="table table-stiped">
                <tr>
                    <td>Código de venda</td>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <!-- <td>Valor unitário</td> -->
                    <!-- <td>total da Compra</td> -->
                    <td>Excluir</td>
                    <td>Editar</td>
                </tr>
                <?php


                while ($row = mysqli_fetch_array($rs)) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $row["idvenda"]; ?>
                        </td>
                        <td>
                            <?php echo $row["Produto"]; ?>
                        </td>
                        <td>
                            <?php echo $row["Quantidade"]; ?>
                        </td>

                        <td>
                            <a href="./excluir.php" onclick="excluir(<?php echo $row["idvenda"]; ?>)">
                                <button type="button" class="btn btn-danger">
                                    Excluir
                                </button>
                            </a>
                        </td>

                        <td>
                            <!-- está levando o ?id -->
                            <a href="editar.php?idvenda=<?php echo $row["idvenda"]; ?>">
                                <button type="button" class="btn btn-success">
                                    Editar
                                </button>
                            </a>
                        </td>
                    </tr>

                    <?php
                }
        } else {
            echo "Nenhum produto cadastrado!";
        }

        // fecha a conexao com o banco
        
        mysqli_close($con);


        // include_once 'rodape.php';
        ?>

    </div>
    <form>
        
        
    <a href="pagamento.html" class="btn btn-primary btn-lg btn-block">Compre aqui</a>
    
</form>