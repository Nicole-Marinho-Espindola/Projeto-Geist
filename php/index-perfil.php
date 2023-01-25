    <?php
        $title = 'Perfil Cliente';
        include_once('header.php');
    ?>

    <link rel="stylesheet" href="../css/style-perfil.css">

    <main class="main-content">
            <div class="perfil">
                <div class="foto-perfil">
                    <div class="ft-icon-perfil">
                        <img src="../img/foto-perfil.jpeg">
                    </div>
                    <div class="main-title">Mateus Sampaio</div>
                </div>

                <div class="feature"></div>
            </div>

            <section class="center">
                <div class="entrega container">
                    <div class="icon-entrega"><i class="fa-solid fa-wallet"></i></div>
                    <div class="icon-entrega"><i class="fa-solid fa-boxes-packing"></i></div>
                    <div class="icon-entrega"><i class="fa-solid fa-truck-fast"></i></div>
                    <div class="icon-entrega"><i class="fa-regular fa-square-check"></i></div>
                    <div class="icon-entrega"><i class="fa-solid fa-star"></i></div>
                </div>
                <div class="feature eature-size"></div>
            </section>

            <section class="config">
                <div class="sub-title"><i class="fa-solid fa-gears perfil-item"></i>Configurações da conta</div>
                <div class="sub-title"><i class="fa-solid fa-right-left perfil-item"></i>Devoluções</div>
                <div class="sub-title"><i class="fa-solid fa-ticket-simple perfil-item"></i>Cupons</div>
                <div class="sub-title"><i class="fa-regular fa-heart perfil-item"></i>Meus favoritos</div>
                <div class="sub-title"><i class="fa-solid fa-right-from-bracket perfil-item"></i><a href="../functions/logout.php">Sair</a></div>
            </section>
    </main>

    <?php
        include_once('footer.php');
    ?>
</body>
</html>