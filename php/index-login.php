<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/style-login.css">


    <title>Login</title>
</head>
<body>
    <main class="main-content">

        <div class="title-div">
            <h1 class="main-title">Faça seu login</h1>
            <div class="feature feature-margin"></div>
        </div>

        <form action="../functions/login.php" method="POST" class="card">

            <div class="content-form">

                <div class="input-content">
                    <img class="input-img" src="../img/email.png" alt="icone email">
                    <input class="input" type="email" name="email" placeholder="Email" id="email" onChange="buttonToggle()">
                </div>

                <div class="input-content">
                    <img class="input-img" src="../img/lock.png" alt="icone cadeado senha">

                    <input class="input input-size" type="password" name="password" placeholder="Senha" id="password" onChange="buttonToggle()">

                    <img class="input-img " src="../img/view.png" alt="icone olho aberto" id="eyePng" onClick="eyeClick()">
                </div>

                <h3 class="sub-title"><a href="#">Esqueci minha senha</a></h3>

            </div>

            <button class="button" disabled id="button">Entrar</button>

            <h5 class="sub-title">Não tem uma conta? <a href="index-cadastro.php"> Cadastre-se</a></h5>

        </form>
    </main>

    <script src="../js/script.js"></script>
</body>
</html>