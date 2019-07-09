<?php
    $fullName = $_REQUEST["fullName"];
    $cpf = $_REQUEST["cpf"];
    $creditCardNumber = $_REQUEST["creditCardNumber"];
    $validation = $_REQUEST["validation"];
    $cvv = $_REQUEST["cvv"];

    $errors = [];

    function validName ($fullName) {
      return strlen($fullName) > 0 && strlen($fullName) <=30;
    }

    function validCpf ($cpf) {
      return strlen($cpf) === 11;
    }

    function validCredidCard ($creditCardNumber){
      if (strlen($creditCardNumber) === 16) {
        return substr($creditCardNumber, -4);
      }
    }

    function validValidation ($validation){
      $currencyDate = date ('Y-m');
      return ($validation > $currencyDate);
    }

    function validCvv ($cvv){
      return strlen($cvv) === 3;
    }

    function purchaseValidation ($fullName, $cpf, $creditCardNumber, $validation, $cvv){
      global $errors;

      if(!validName($fullName)){
        array_push($errors, 'Invalid Name');
      }

      if(!validCpf($cpf)){
        array_push($errors, 'Invalid Cpf');
      }

      if(!validCredidCard($creditCardNumber)){
        array_push($errors, 'Invalid Credit Card');
      }

      if(!validValidation($validation)){
        array_push($errors, 'Invalid Validation Credit Card');
      }

      if(!validCvv($cvv)){
        array_push($errors, 'Invalid Cvv');
      }
    }

    purchaseValidation ($fullName, $cpf, $creditCardNumber, $validation, $cvv);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Buy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<body>

<div class="container">
      <div class="col-md-6 col-md-offset-3">
        <?php if (count($errors) > 0) : ?> 
          <div class="panel panel-danger">
            <div class="panel-heading">
              <span>Fill out one or more of the available fields</span>
            </div>
            <div class="panel-body">
              <ul class="list-group">
                  <?php foreach($errors as $key => $value): ?>
                      <li class="list-group-item">
                        <?php echo $value ?>
                      </li>
                  <?php endforeach; ?>
              </ul>
              <div class="center">
                <a href="index.php">Back to home</a>
              </div>
            </div>
          </div>   
          <?php else: ?>
          <div class="panel panel-primary">
            <div class="panel-heading">Buy Successful</div>
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item"><strong>Painting:</strong></li>
                <li class="list-group-item"><strong>Price: R$</strong></li>
                <li class="list-group-item"><strong>Full Name:</strong></li>
              </ul>
              <div class="center">
                <a href="index.php">Back to home</a>
              </div>
            </div>
          </div>
          <?php endif; ?>
      </div>
    </div>
  </body>
</html>