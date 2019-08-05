<!DOCTYPE html>
<html lang="pt-br">
    <?php
    require_once("inc/head.php");
    ?>
<body>
    <?php
    require_once("inc/header.php");
    ?>
    <main>
    <section class="container-fluid">
        <div class="row">
            <div id="carrossel-hotel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carrossel-hotel" data-slide-to="0" class="active"></li>
                <li data-target="#carrossel-hotel" data-slide-to="1"></li>
                <li data-target="#carrossel-hotel" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/hotel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/img/hotel2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/img/hotel3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carrossel-hotel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrossel-hotel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </section>

    <section class="container pt-3">
        <div class="row">
            <div class="col-3 icon-content">
            <i class="fas fa-cocktail"></i>
            <p class="text-center">All Include</p>
            </div>
            <div class="col-3 icon-content">
            <i class="fas fa-concierge-bell"></i>
            <p class="text-center">Serviços de Quarto</p>
            </div>
            <div class="col-3 icon-content">
            <i class="fas fa-dice"></i>
            <p class="text-center">Cassinos e jogos</p>
            </div>
            <div class="col-3 icon-content">
            <i class="fas fa-car"></i>
            <p class="text-center">Aluguel de carros</p>
            </div>
        </div>
    </section>

    <section class="container-fluid text-center">
        <span>Bem vindo ao Movilla Hotels</span>
        <h2>Faça sua reserva agora mesmo!</h2>
        <div class="row">
            <div class="col-6 d-flex p-0">
                <div class="col-6 product-content">
                <div>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="text-center">$1200 por noite</p>
                <h3 class="text-center">Luxury Room</h3>
                <button class="button-product">Reservar</button>
                </div>
                <div class="col-6 image-product-1">
                </div>
            </div>

            <div class="col-6 d-flex p-0">
                <div class="col-6 product-content">
                <div>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="text-center">$1600 por noite</p>
                <h3 class="text-center">Deluxe Room</h3>
                <button class="button-product">Reservar</button>
                </div>
                <div class="col-6 image-product-2">
                </div>
            </div>

            <div class="col-6 d-flex p-0">
                <div class="col-6 image-product-3">
                </div>
                <div class="col-6 product-content">
                <div>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="text-center">$1800 por noite</p>
                <h3 class="text-center">Luxury Room</h3>
                <button class="button-product">Reservar</button>
                </div>
            </div>

            <div class="col-6 d-flex p-0">
                <div class="col-6 image-product-4">
                </div>
                <div class="col-6 product-content">
                <div>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="text-center">$1700 por noite</p>
                <h3 class="text-center">Superior Room</h3>
                <button class="button-product">Reservar</button>
                </div>
            </div>


        </div>
    </section>

    <section class="text-center">
        <span >Nossas vantagens</span>
        <h2>Confira nossos benefícios</h2>
    </section>
    <section class="container-fluid back-content">
        <div class="row">
            <div class="col-lg-4 back-text">
                <div class="caixa d-flex flex-row align-items-center">
                <p class="text-center">Conheças as melhores praias do mundo em resorts espetaculares</p>
                </div>
            </div>
            <div class="col-lg-4 back-text">
                <div class="caixa d-flex flex-row align-items-center"> 
                <p class="text-center">Formas de pagamento imperdíveis que cabe no seu bolso</p>
                </div>
            </div>
            <div class="col-lg-4 back-text">
                <div class="caixa d-flex flex-row align-items-center">
                <p class="text-center">All include para você e sua família aproveitarem sem preocupação</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="text-center">
            <span>Entre no nosso instagram e compartilhe nossas fotos</span>
            <h2>Instagram</h2>
            <div class="row">
                    <img class="mb-4 col-lg-2 galeria-imagem" src="assets/img/insta1.png" alt="">
                    <img class="mb-4 col-lg-2 galeria-imagem" src="assets/img/insta2.png" alt="">
                    <img class="mb-4 col-lg-2 galeria-imagem" src="assets/img/insta3.png" alt="">
                    <img class="mb-4 col-lg-2 galeria-imagem" src="assets/img/insta4.png" alt="">
                    <img class="mb-4 col-lg-2 galeria-imagem" src="assets/img/insta5.png" alt="">
                    <img class="mb-4 col-lg-2 galeria-imagem" src="assets/img/insta6.png" alt="">
            <div>
        </div>
    </section>
    </main>

    <?php
        require_once("inc/footer.php");
    ?>

</body>
</html>