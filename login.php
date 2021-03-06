<?php
if (isset($_SESSION["email"])){
  header("Location: index.php");
}
include_once "scripts/functions.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 
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
    getNavigation();
    if(!empty($_SESSION['message'])) {
      $message = $_SESSION['message'];
      unset($_SESSION['message']);
      echo '<div class="alert alert-danger fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>'.$message.'!</strong>
      </div>';
    }
    ?>
    <!-- telo -->
  <section class="container" style="min-height: 75vh">
    <div class="page-header">
      <h1>
        Log in
      </h1>
    </div>
    <form action="scripts/loginServer.php" class="center-block" method="POST">
      <div class="input-group-addon">

        <label for="email">Enter e-mail:</label>
        <input class="form-control" type="email" name="email" id="email" required placeholder="example@mail.com">
        <br>
        <label for="password">Enter password:</label>
        <input type="password" name="password" class="form-control" id="password" required>
        <br><br>
        <button type="submit" name="btn_login" class="btn btn-primary center-block">Log in</button>
        <br>
        <a class="btn btn-primary" href="./register.php">Register</a>
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