<?php
    $gallery = [
        "clockwork" => ["Clockwork Orange", "clockworkOrange.jpg", "$41.99"],
        "woman" => ["Woman Art Painting", "womanArtPainting.jpg", "$51.99"],
        "fightClub" => ["Fight Club", "fightClub.jpg", "$51.99"],
        "anthonyHopkins" => ["Anthony Hopkins", "anthonyHopkins.jpg", "$61.99"],
        "motorhead" => ["Motorhead", "motorhead.jpg", "$41.99"],
        "eltonJohn" => ["Elton John", "eltonJohn.jpg", "$41.99"],
        "taxidriver" => ["Taxi Driver", "taxiDrive.jpg", "41.99"],
        "mia" => ["M.I.A", "mia.jpg", "$41.99"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rasa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
</head>
<body>
    <header class="container-fluid">
        <div class="row justify-content-around align-items-center">
        <span class="logo">Cutting Edge</span>
        <nav class="navbar nav w-50 ">

            <ul class="navTeste list-unstyled m-0 w-100">
                <li class=""><a href="">Home</a></li>
                <li class=""><a href="">Gallery</a></li>
                <li class=""><a href="">Contact</a></li>
            </ul>

        </nav>
        </div>
    </header>

        <section>
        <h1>Gallery</h1>
        <p>Lorem ipsum dolor sit amet, perferendis pariatur, sunt facilis veniam error quisquam reprehenderit expedita ratione.</p>
        </section>

        <section class="container-fluid">
            <div class="row">
            <?php foreach ($gallery as $key => $value) { ?>
            <div class="col-lg-3 d-flex flex-column align-items-center">
                <div class="flip-container">
                <div class="flipper">
                <img src="img/<?php echo $value[1];    ?>" alt="" class="img-fluid flip-card-front">
                <div class="flip-card-back">
                <div class="text-box">
                <h2>Fernando Matallo</h2> 
                <p>Front End Jr</p> 
                </div>
                </div>
                </div>
                </div>
                <h2><?php echo $value[0];?></h2>
                <p> <?php echo $value[2];?> </p>
                <button class="mb-5" type="button" data-toggle="modal" data-target="#modalType">Buy</button>
                
            </div>
            <?php } ?>
            </div>
        </section>
            <?php foreach ($gallery as $key => $value) { ?> 
                <div class="modal fade" id="modalType" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Purchase Order</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Painting: <?php $value[0] ?> </h4>
                                <h4>Price: <?php $value[2] ?></h4>

                      <form class="" action="buy.php" method="POST">
                          <input type="hidden" name="nomeCurso" value="">
                          <input type="hidden" name="precoCurso" value="">
                          <div class="input-group col-md-5">
                              <label for="labelNome">Full Name</label>
                              <input id="labelNome" type="text" name="fullName" class="form-control"
                                  placeholder="Digite Aqui...">
                          </div>

                          <div class="input-group col-md-5">
                              <label for="labelCpf">CPF</label>
                              <input id="labelCpf" type="number" name="cpf" class="form-control"
                                  placeholder="Digite Aqui...">
                          </div>

                          <div class="input-group col-md-5">
                              <label for="labelNroCartao">Credit Card</label>
                              <input id="labelNroCartao" type="number" name="creditCardNumber" class="form-control"
                                  placeholder="Digite Aqui...">
                          </div>

                          <div class="input-group col-md-5">
                              <label for="labelValidade">Validation</label>
                              <input id="labelValidade" type="month" name="validation" class="form-control"
                                  placeholder="Digite Aqui...">
                          </div>

                          <div class="input-group col-md-5">
                              <label for="labelCvv">CVV</label>
                              <input id="labelCvv" type="number" name="cvv" class="form-control"
                                  placeholder="Digite Aqui...">
                          </div>

                          <button type="submit" name="button" class="btn btn-info">Buy</button>
                      </form>
                            </div>
                            <div class="modal-footer">
                                <p align="center">Copyright &copy; Cutting Edge</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
              


    

        <footer>
            <div>Cutting Edge</div>
        </footer>
</body>
</html>