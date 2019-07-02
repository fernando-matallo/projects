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
    <!-- aplicado o navbar expand sm e navbar light para aparecer o toggle na versão mobile -->
    <!-- Incluindo o navbar o header acerta o functionamento do collapse -->
    <!-- Alinhando os items centralizado -->
    <header class="container-fluid navbar navbar-expand-sm navbar-light row align-items-center m-0">
        <!-- Incluindo col-4 para fixar o tamanho -->
        <span class="col-4">
            <a class="navbar-brand" href="#">Route 66</a>
        </span>

        <!-- Toggle para navegação mobile -->  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#naveffect"
        aria-controls="navbarNav" aria-expanded ="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar collpase que faz aparecer e desaparecer o menu -->
        <!-- retirei col-8 para fizer o tamnaho do colapse ficar no centro-->
        <nav class="text-center navbar-collapse collapse" id="naveffect">

        <!-- inserido navbarnav na ul aumentando seu tamanho e flex para posicionar -->
        <!-- FICOU FALTANDO POSICIONAR AS CATEGORIAS NO COLLAPSE -->
       
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>     
        </nav>
    </header>

    <!-- Banner Principal com Slider -->

    <section id="slide-show-container">

    <article class="slide-fade fade-in">
        <div class="background-content1">
            <div class="banner-text">
            <h2 class="text">Venice</h2>
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
        <h1 class="text-center mt-5">Route 66 - Tour Guides in Europe</h1>
        <p class="text-center mb-3">CHECK OUT OUR BEST PROMOTION TOURS</p>
    </section>

    <section class="row">
        <div class="img-main-content p-0 col-12 col-lg-4">
            <div class="text-effect-content">
            <p class="m-0">text</p>
            <h3>Title</h3>
            </div>
        </div>


    </section>
    
    
</body>
</html>