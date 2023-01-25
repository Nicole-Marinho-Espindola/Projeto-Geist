<?php
    $title = 'Sobre Nós';
    include_once('header.php');
?>
   
   <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/style-FC.css">

    <main class="main-content">

        <div class="section-fc">
            <h1 class="main-title">Fale Conosco</h1>
            <div class="feature feature-margin"></div>

            <img class="img-fc" src="../img/Contact us-amico.svg" alt="Imagem Fale Conosco">
        </div>

        <div class="section-fc">
            <form class="card" action="">

                <div class="content-div">
                    <label class="sub-title">Nome:</label>
                    <input class="input" type="text" id="nome" name="nome" maxlength="100" required>
                </div>

                <div class="content-div">
                    <label class="sub-title">Email:</label>
                    <input class="input" type="email" id="nome" name="nome" maxlength="100" required>
                </div>

                <div class="content-div">
                    <label class="sub-title">Telefone:</label>
                    <input class="input" type="text" id="telefone" name="telefone" placeholder="(00)00000-0000" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" maxlength="12" required>
                    <script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
                </div>

                <div class="content-div">
                    <label class="sub-title">Assunto:</label>
                    <input class="input" type="text" id="nome" name="nome" maxlength="100" required>
                </div>

                <div class="content-div">
                    <label class="sub-title">Mensagem:</label>
                    <input class="input " type="text" id="nome" name="nome" maxlength="100" required>
                </div>

                <div>
                    <button class="button btn-300">Enviar</button>
                </div>

            </form>
        </div>
    </main>

<?php
    include_once('footer.php');
?>

