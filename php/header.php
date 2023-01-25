<?php
session_start();
$logged_user = $_SESSION['logged_user'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/style-footer.css">

    <script src="https://kit.fontawesome.com/54b363c91d.js" crossorigin="anonymous"></script>

    <title><?= (isset($title) ? $title : 'Geist') ?></title>
</head>
<body>
    <!-- Menu de navegação home > logo, topicos, banner etc -->
    <header>
        <nav class="menu">
            <section class="nav-bar">

                <div class="logo-block">
                    <img class="logo" src="../img/logo.png">
                </div>

                <div class="search">

                    <div class="search-block">
                        <div class="search-icon-block">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <!-- <input type="text" class="search-text" > -->
                    </div>
                </div>

                <?php if (!isset($logged_user) || is_null($logged_user)) { ?>

                    <div class="cadastro">

                        <a href="index-login.php">Entrar</a>
                        <a class="btn-nav" href="index-cadastro.php">CADASTRO</a>
                    </div>

                <?php } else { ?>

                    <div class="cadastro">

                    <!-- href="index-login.php" -->
                        <div class="ft-perfil">
                            <i class="fa-regular fa-heart icon"></i>
                            <a href="index-carrinho.php"><i class="fa-solid fa-bag-shopping icon"></i></a>
                            <!-- <div >Your Name</div> -->
                            <a href="index-perfil.php"><div class="ft-icon">
                                <img src="../img/foto-perfil.jpeg">
                            </div></a>
                        </div>
                    </div>

                <?php } ?>

            </section>

            <section class="sub-navbar">

                <p><a href="index-home.php">INÍCIO</a></p>

                <p><a href="index-produtos.php">PRODUTOS</a></p>

                <p><a href="aboutUs.php">SOBRE NÓS</a></p>

                <p><a href="faleConosco.php">FALE CONOSCO</a></p>

            </section>
