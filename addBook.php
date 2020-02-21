<?php
include_once 'scripts/functions.php';
if (!(isset($_SESSION["admin"]))||$_SESSION["admin"]==0){
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Add Book</title>

</head>
<body>
  <!-- Navigation -->
  <?php
    getNavigation();
  ?>
  <!-- Body -->
  <div class="container">
    <div class="row" style="margin-top:5vh" >
        <div class="col-md-3">
        <div id="drop">
        <img id="img_srcZaProveru" src="./img/knjige/bookfiller.png" class="img-responsive center-block" >
          <input  type="file" name="img_src" id="fileUploadovan" accept="image/png, image/jpeg, image/jpg" style="visibility: hidden;"/>
          <label class="btn btn-primary" id="fileUploadovanLable" for="fileUploadovan" style="white-space:normal" >Click to choose image or drag it above. (JPG, JPEG, PNG)</label>
        </div>
          <div class="text-center">
          <br>
            <label for="format">Format:</label><br> <input type="text"name="format"id="format">
            <label for="brStrana">Broj strana:</label><br> <input type="text"name="pages"id="brStrana">
            <label for="godIzdanja">Godina izdanja:</label><br> <input type="text"name="relese"id="godIzdanja">
          </div>
        </div>
        <div class="col-md-7">  
          <h2 class="title-knjige">Title</h2>
          <input type="text" name="title">
          <h3>Author</h3>
          <input type="text" name="author">
          <h4>Categories:</h4>
          <input type="text" name="categories">
          <p class="oknjizi">About the book</p>
          <textarea name="about" cols="70" rows="10"></textarea>
        </div>
        <div class="col-md-2">
          <div class="price">
            <h3>Price: </h3>
            <input type="number" min=0 name="price">
            <h4>Discount: </h4>
            <input type="number" min=0 value=0 max=100 name="discount">%
          </div>
          <button class="btn btn-success pull-right" style="margin-top:15vh" id="btn_dodajKnjigu">Add Book</button>
        </div>
    </div>
  <div>
  </div>
  </div>
  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
  <script src="scripts/main.js"></script>
  <script src="./scripts/dragAndDrop.js"></script>

</body>
</html>