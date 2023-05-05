<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área compras</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>

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
                    href="artigos.php">Consulta artigos</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                          href="./index.html">Voltar para página principal</a></li>
                </ul>
            </div>
        </div>
    </nav>

<body>
        <div class="container"  >
        <form action="./fonte/gravarArtigo.php" method="post" enctype="multipart/form-data">
            <br><br><br><br><br><br><br><br>
            Título : <br>
            <input type="text" name="titulo" id="" required="required" >
            <br> <br>
            Autor : <br>
            <input type="text" name="autor" id="" required="required" >
            <br> <br>
            Artigo: <br>
            <textarea name="artigo" id="" cols="30" rows="10"></textarea>
            <br> <br>
            Foto : <br>
            <input type="file" name="foto"  id="" required="required" >
            <br> <br>
            <br>
            <input type="submit" value="Cadastrar"/>
            <br> <br>

        </form>
    </div>

    <?php 
            if (isset($_GET["msg"])) {
                //echo base64_decode($_GET["msg"]);
                ?>
                <script>
                    alert('<?php echo base64_decode($_GET["msg"]) ?>');
                </script>

                <?php
            }
        
        ?>

    
        <footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Onde estamos</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.333717216199!2d-43.178709985034416!3d-22.901058785014772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f58c55b484f%3A0xb0d27098592841af!2sCentro%20Cultural%20Banco%20do%20Brasil%20(CCBB%20RJ)!5e0!3m2!1spt-BR!2sbr!4v1666785954156!5m2!1spt-BR!2sbr"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4"> Estamos nas redes sociais </h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                        class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                        class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>

        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>




</html>