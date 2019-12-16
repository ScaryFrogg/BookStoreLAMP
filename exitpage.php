<?php
include_once "scripts/functions.php";
if(!isset($_POST["btn_form_sent"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bukstor exit page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  </head>
<body>
    <div class="container" style="min-height: 80vh">
    <div class="row" style="margin-top:20vh">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Your message has been successfully sent</h3>
          </div>
          <div class="panel-body">
            Thanks for your interest. Our team will try to respond as soon as possible 
          </div>
        </div>
        <a href="./index.php" class="btn btn-success btn-lg btn-block" role="button">Back to Home Page</a>
      </div>
      <div class="col-md-3"></div>
    </div>
    </div>
  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>