<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="author" content="Pavle Milisavljević pavleelite2017@gs.viser.edu.rs">
  <meta name="description" content="Prijavljivanje korisnika">
  <meta name="keywords" content="Prodavnica,Knjige,login,Pirjava">
  <title>Bukstor Prijava</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- navigacija -->
    <?php 
    isipisHtml("nav");
    ?>
    <!-- telo -->
  <section class="container" style="min-height: 75vh">
    <div class="page-header">
      <h1>
        Pristupite vašem nalogu
      </h1>
    </div>
    <form action="#" class="center-block">
      <div class="input-group-addon">

        <label for="email">Unesite vaš e-mail:</label>
        <input class="form-control" type="email" id="email" required placeholder="primer@mail.com">
        <br>
        <label for="sifra">Unesite vašu sifru:</label>
        <input type="password" class="form-control" id="sifra" required>
        <br><br>
        <button type="submit" class="btn btn-primary center-block">&nbsp;&nbsp;Uloguj se&nbsp;&nbsp;</button>
        <br>
        <a class="btn btn-primary" href="./register.html">Kreiraj nalog</a>
        <br>
      </div>

    </form>
  </section>
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>