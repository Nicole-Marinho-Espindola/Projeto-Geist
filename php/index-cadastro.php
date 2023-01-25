<?php
    $title = 'Cadastro';
    include_once('header.php');
?>

    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/style-cadastro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="../css/style-FC.css">

<main class="main-content">

<div class="section-fc">
    <h1 class="main-title">Cadastre-se</h1>
    <div class="feature feature-margin"></div>

    <img class="img-fc" src="../img/Mobile login-rafiki.svg" alt="Imagem Fale Conosco">
</div>

<div class="section-fc">
    <form class="card" action="">

        <div class="content-div">
            <label class="sub-title">Nome:</label>
            <input class="input" type="text" maxlength="100">
        </div>

        <div class="content-div">
            <label class="sub-title">Email:</label>
            <input class="input" type="email" maxlength="100">
        </div>

        <div class="content-div">
            <label class="sub-title">Telefone:</label>
            <input class="input" type="text" id="telefone" name="telefone" placeholder="(00)00000-0000" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" maxlength="12">
            <script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
        </div>

        <div class="content-div">
            <label class="sub-title">Senha:</label>
            <input class="input" type="password" maxlength="100">
        </div>

        <div>
            <button class="button btn-300">Cadastrar</button>
        </div>

    </form>
</div>
</main>

<?php
    include_once('footer.php');
?>