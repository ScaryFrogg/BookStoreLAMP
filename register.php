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
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" class="form-control" required placeholder="Jane">
        <label for="last_name">Enter your last name:</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required placeholder="Doe">
        <br>
        <label for="email">Enter your e-mail:</label>
        <input class="form-control" type="email" id="email" name="email" required placeholder="jande.doe@mail.com">
        <br>
        <label for="pw">Create password:</label>
        <input type="password" class="form-control" id="pw" name="pw1" required>
        <br>
        <label for="pw2">Repeat password:</label>
        <input type="password" class="form-control" id="pw2" name="pw2" required>
        <br><br>
        <label for="newsletter">I want to subscribe to newsletter &nbsp;</label>
        <input type="checkbox" class="btn" name="newsletter" id="newsletter" checked>
        <br> <br>
        <label for="eula">I agree to &nbsp;</label><label><a class="text-primary">terms and conditions</a>&nbsp;</label>
        <input type="checkbox" class="btn" name="newsletter" id="eula" required>
        <br><br>
        <button class="btn btn-primary" type="submit">Register</button>
        <br>
      </div>
    </form>
  </section>
  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
      <!-- js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="scripts/bootstrap.min.js"></script>
      <script src="./scripts/main.js"></script>
</body>
</html>