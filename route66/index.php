<?php
    $produtosHome = [
      "Paris" => ["Paris", "Buy tickets from Paris", "paris.jpg"],
      "Roma" => ["Roma", "Buy tickets from Rome", "roma.jpg"],
      "Praga" => ["Prague", "Buy tickets from Prague", "praga.jpg"]
    ];

    $galeria = [
        "Instambul" => ["instambul.jpg", "Instambul"],
        "Londres" => ["london.jpg", "Londres"],
        "Madrid" => ["madrid.jpg", "Madrid" ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route 66</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <script defer src="javascript/main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>

    <header class="container-fluid navbar navbar-expand-sm navbar-light row align-items-center m-0">

        <span class="col-4">
            <a class="navbar-brand" href="#">Route 66</a>
        </span>
  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#naveffect"
        aria-controls="navbarNav" aria-expanded ="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <nav class="text-center navbar-collapse collapse" id="naveffect">

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>     
        </nav>
    </header>

    <section id="slide-show-container">

    <article class="slide-fade fade-in">
        <div class="background-content1">
            <div class="banner-text">
            <h2 class="text">Switzerland</h2>
            <p class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus cupiditate quae nobis, earum placeat.</p>
            </div>
        </div>
    </article>

    <article class="slide-fade fade-in">
        <div class="background-content2">
            <div class="banner-text">
            <h2 class="text">Zurich</h2>
            <p class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus cupiditate quae nobis, earum placeat.</p>
            </div>
        </div>
    </article>

    <article class="slide-fade fade-in">
        <div class="background-content3">
            <div class="banner-text">
            <h2 class="text">Vienna</h2>
            <p class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus cupiditate quae nobis, earum placeat.</p>
            </div>
        </div>
    </article>

    <div class="dots-container">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    </section>

    <!-- Conteúdo principal do site -->

    <section>
        <h1 class="text-center mt-4">Route 66 - Tour Guides in Europe</h1>
        <p class="text-center mb-3">CHECK OUT OUR BEST PROMOTION TOURS</p>
    </section>
    
    <section class="container-fluid">
    <div class="row">
        <?php foreach ($produtosHome as $cidade => $infos) { ?>
        <div class="img-main-content p-0 col-12 col-lg-4">
        <div class="caption">
        <p class="m-0"><?php echo$infos [1] ?></p>
        <h3><?php echo$infos [0] ?></h3>
        </div>
        <img class="img-fluid" src="imagens/<?php echo$infos [2]; ?>" alt="">
        </div>
        <?php } ?>
    </div>
    </section>

    <section>
        <h2 class="text-center mt-4">Why Choose US</h2>
        <p class="text-center mb-3">CHECK OUT OUR BEST PROMOTION TOURS</p>
    </section>

    <section class="container-fluid">
    <div class="row">
        <div class="col-12 choose-content">
            <div>
            <h3>Text</h3>
            <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
            </div>
            <div>
            <h3>Text</h3>
            <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
            </div>
            <div>
            <h3>Text</h3>
            <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
            </div>
        </div>
    </div>
    </section>

    <section>
        <h2 class="text-center mt-3">Gallery</h2>
        <p class="text-center mb-3">CHECK OUT OUR BEST PROMOTION TOURS</p>
    </section>

    <div class="container-fluid">
        <div class="gallery-content row">
        <?php foreach ($galeria as $propPais => $propValor) { ?>
            <div class="d-flex flex-column col-lg-4">
            <img src="imagens/<?php echo$propValor[0]; ?>" alt="" class="img-fluid">
            <button class="modal-btn button" onclick="openModal(this)" data-target="#modal-<?= $propPais; ?>" >Check it out <?php echo$propValor[1]; ?></button>
            </div>
        <?php } ?>
        </div>
    </div>

    <?php foreach ($galeria as $propPais => $propValor) { ?>
    <div class="modal simpleModal" id="modal-<?= $propPais; ?>">
        <div class="modal-content">
            <span onclick="closeModal(this)" class="closeBtn" data-target="<?= $propPais; ?>">&times;</span>
            <img src="imagens/<?php echo$propValor[0]; ?>" alt="" class="img-fluid img-thumbnail">
        </div>
    </div>
    <?php } ?>


<footer class="page-footer">

  <div class="footer-copyright text-center pt-2 pb-2">© 2019 Route66</div>

</footer>

    
    
</body>
</html>