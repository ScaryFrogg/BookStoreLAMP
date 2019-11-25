<?php
session_start();
include_once "funkcije.php"
//Ako nije doso sa druge ne moze da prisupi ovoj
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bukstor Poruka uspešno poslata</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  </head>
<body>
    <div class="container" style="min-height: 85vh">
    <div class="row" >
        <div class="col-md-12">
                <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Vaša poruka je poslata</h3>
                </div>
                <div class="panel-body">
                  Hvala na interesovanju, potrudićemo se da vam odgovorimo u što kraćem roku. 
                </div>
              </div>
              <a href="./index.html" class="btn btn-success btn-lg btn-block" role="button">Nazad na poćetnu</a>
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