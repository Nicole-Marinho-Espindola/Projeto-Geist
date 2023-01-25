    <?php
        $title = 'Carrinho';
        include_once('header.php');
    ?>

    <link rel="stylesheet" href="../css/style-carrinho.css">
        <main class="main-content">


            <div class="card-position">
            <div class="title-block">
                <div class="title-page">
                    <i class="fa-solid fa-bag-shopping icon-shop"></i>
                    <h1 class="main-title">Carrinho</h1>
                </div>
                <div class="feature"></div>
            </div>

                <div class="main-div">
                    <div class="card">
                        <img class="manga" src="../img/img3-manga.jpg" alt="Imagem manga no carrinho">

                        <div class="description">
                            <h1 class="card-title">K-ON! - Vol. 2</h1>
                            <div class="price-div">
                                <h1>R$ 14,90</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-div">
                    <div class="card">
                        <img class="manga" src="../img/img2-manga.jpg" alt="Imagem manga no carrinho">

                        <div class="description">
                            <h1 class="card-title">Kaichou wa Maid Sama - Vol. 1</h1>
                            <div class="price-div">
                                <h1>R$ 39,90</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-finalizar">
                <h1 class="main-title">Finalizar compra</h1>
                <div class="cupom">
                    <label for="">Inserir cupom</label>
                    <input class="inserir input" type="text">
                </div>
                <div class="frete">
                    <label for="">Calcular frete</label>
                    <input class="inserir input" type="text">
                </div>

                <div class="campo-preco">
                    <div class="display">
                        <div class="sub-title">Sub-total</div>
                        <div class="preco">R$ 54,80</div>
                    </div>

                    <div class="display">
                        <div class="sub-title">Total da compra</div>
                        <div class="preco-final">R$ 54,80</div>
                    </div>

                    <button class="button btn-300">Finalizar Compra</button>
                    <button class="btn-light btn-300 button">Continuar comprando</button>
                </div>
            </div>
        </main>

        <?php
            include_once('footer.php');
        ?>
    </body>
</html>