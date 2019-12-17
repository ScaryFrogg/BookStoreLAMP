<?php
include_once "scripts/functions.php";
if(isset($_SESSION["email"])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bukstor Register</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<!-- navigation-->
  <?php 
  getNavigation();
  ?>
<!-- telo -->
  <section class="container" style="min-height: 75vh">
    <div class="page-header">
      <h1>
        Create account
      </h1>
    </div>
    <form action="scripts/server.php" method="POST" class="center-block">
      <div class="input-group-addon">
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" class="form-control" required placeholder="name">
        <label for="last_name">Unesite vaše last_name:</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required placeholder="last_name">
        <br>
        <label for="email">Unesite vaš e-mail:</label>
        <input class="form-control" type="email" id="email" name="email" required placeholder="prnamer@mail.com">
        <br>
        <label for="sifra">Kreirajte šifru:</label>
        <input type="password" class="form-control" id="sifra" name="sifra1" required>
        <br>
        <label for="sifra2">Ponovite šifru:</label>
        <input type="password" class="form-control" id="sifra2" name="sifra2" required>
        <br>
        <span><label for="muskarac"><i class="fas fa-male fa-3x"></i></label></span>
        <input type="radio" name="pol" id="muskarac">
        <input type="radio" name="pol" id="zena">
        <span><label for="zena"><i class="fas fa-female fa-3x"></i></label></span>
        <br><br>
        <label for="newsletter">Želim da se prijavim na newsletter&nbsp;</label>
        <input type="checkbox" name="newsletter" id="newsletter" checked>
        <br><br>
        <button class="btn btn-primary" type="submit">Kreiraj nalog</button>
        <br>
      </div>
    </form>
  </section>
  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>
</body>
</html>