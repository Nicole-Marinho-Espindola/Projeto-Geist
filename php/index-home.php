
    <?php
        $title = 'Home';
        include_once('header.php');

        $_SESSION['users'] = [
            [
                'email' => 'admin@gmail.com',
                'password' => 'admin'
            ],
            [
                'email' => 'email1@email.com',
                'password' => '123456'
            ]
        ];
    ?>

    <link rel="stylesheet" href="../css/style-home.css">

    <!-- Banner -->
            <section>
                <div id="sliderBanner" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/banner1.jpeg" class="d-block w-100" alt="Banner 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner2.jpeg" class="d-block w-100" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner3.jpeg" class="d-block w-100" alt="Banner 3">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#sliderBanner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#sliderBanner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </section>
        </nav>

    </header>
    <!-- Introdução -->

    <article class="sobre row">

        <div class="sobre-text col-lg-8 col-sm-12 col-xl-6">
            <div class="mb-5">
                <h1 class="main-title transition">Geist</h1>
                <div class="feature"></div>
            </div>
            <p class="sub-title">Empresa fundada por apaixonados por quadrinhos que queriam proporcionar melhores
                experiencias para todos os leitores  </p>
            <p class="sub-title c-sub title ">Tudo das melhores edições você encontra aqui na Geist!</p>
        </div>


        <div class="sobre-img col-lg-4 col-sm-12 col-xl-6 mr-5">
            <img class="img" src="../img/ghosts-animate.svg" alt="">
        </div>
    </article>

    <!-- Divisoria home > cards -->
    <main class="main-content">
        <div class="title-block main-title">
            <h1 class="margin-top-5 ">Conheça nossas assinaturas</h1>
            <div class="feature"></div>
        </div>

        <div class="card-section" >

            <div class="card">

                <h1> Dragon Ball</h1>

                <img class="card-img img-prod" src="../img/img1-assinatura.jpg" alt="">

                <p>TODO MÊS EDIÇÔES NOVAS NA SUA CASA</p>


                <button class="button">Assine agora</button>

            </div>

            <div class="card">

                <h1> One Piece</h1>

                <img class="card-img img-prod" src="../img/img2-assinatura.jpg" alt="">

                <p>TODO MÊS EDIÇÔES NOVAS NA SUA CASA</p>

                <button class="button">Assine agora</button>

            </div>

            <div class="card">

                <h1> Avengers</h1>

                <img class="card-img img-prod" src="../img/img3-assinatura.jpg" alt="">

                <p>TODO MÊS EDIÇÔES NOVAS NA SUA CASA</p>

                <button class="button">Assine agora</button>

            </div>

            <div class="card">

                <h1> Spy X Family</h1>

                <img class="card-img img-prod" src="../img/img4-assinatura.jpg" alt="">

                <p>TODO MÊS EDIÇÔES NOVAS NA SUA CASA</p>

                <button class="button">Assine agora</button>

            </div>

        </div>

        <div class="main-content">

            <div class="title-block main-title">
                <h1>Produtos mais vendidos</h1>
                <div class="feature"></div>
            </div>

            <div class="card-section w-100" >

                <div class="card">

                    <img class="card-img img-prod" src="../img/img1-famosos.jpg" alt="">

                    <h1> BOKU NO HERO</h1>
                    <p>VOLUME 1</p>

                    <h1>R$18,99</h1>

                    <p>até 5x de R$3,80 sem juros</p>

                    <button class="button">Comprar</button>

                </div>

                <div class="card">

                    <img class="card-img img-prod" src="../img/img2-famosos.jpg" alt="">

                    <h1> JUJUTSU KAISEN</h1>
                    <p>VOLUME 1</p>

                    <h1>R$20,99</h1>

                    <p>até 5x de R$4,20 sem juros</p>

                    <button class="button">Comprar</button>

                </div>

                <div class="card">

                    <img class="card-img img-prod" src="../img/img3-famosos.jpg" alt="">

                    <h1> DEMON SLAYER</h1>
                    <p>VOLUME 1</p>

                    <h1>R$22,99</h1>

                    <p>até 5x de R$4,60 sem juros</p>

                    <button class="button">Comprar</button>

                </div>

            </div>
        </div>
    </main>

    <?php
        include_once('footer.php');
    ?>
