<?php
include_once "functions.php"
//ako nije dosao sa druge strane ne moze da pristupi ovoj
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <title>Bukstor kreiran naog</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  </head>
<body>
    <div class="container">
    <div class="row" >
        <div class="col-md-12" style="min-height: 85vh">
                <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Uspešno ste kreirali nalog</h3>
                </div>
                <div class="panel-body">
                  Hvala na interesovanju, dobro došli sada možete pristupiti svom nalogu! 
                </div>
              </div>
              <a href="./login.html" class="btn btn-success btn-lg btn-block" role="button">Nazad na prijavljivanje</a>
        </div>
    </div>
    </div>
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>