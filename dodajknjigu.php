<?php
if (!(isset($_SESSION["email"]))||$_SESSION["administrator"]==0){
  header("Location: index.php");
}
include 'funkcije.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Dodaj Knjigu</title>

</head>
<body>

  <div class="container knjiga">
    <div class="row" style="margin-top:10vh">
      <form action=""  enctype="multipart/form-data">
        <div class="col-md-2">
        <div id="drop">
        <img id="slikaZaProveru" src="./img/knjige/bookfiller.png" class="img-responsive center-block" >
          <input  type="file" name="slika" id="fileUploadovan" />
          <label for="slika"><strong>Izaberi sliku...</strong><span class="box__dragndrop"> ili je prevucite iznad</span>.</label>
        </div>
          <div class="text-center">
         
          <br>
            <label for="format">Format:</label> <input type="text"name="format"id="format">
            <label for="brStrana">Broj strana:</label> <input type="text"name="brStrana"id="brStrana">
            <label for="godIzdanja">Godina izdanja:</label> <input type="text"name="godIzdanja"id="godIzdanja">
          </div>
        </div>
        <div class="col-md-7">  
          <h2 class="naslov-knjige">Naslov Knjige</h2>
          <input type="text" name="naslov">
          <h3>Autor Knjige</h3>
          <input type="text" name="autor">
          <h4>Kategorija:</h4>
          <input type="text" name="kategorija">
          <p class="oknjizi">O knjizi</p>
          <textarea name="opis" cols="70" rows="10"></textarea>
        </div>
        <div class="col-md-3">
          <div class="cena">
            <h3>Cena: </h3>
            <input type="text" name="cena">
          </div>
        </div>
      </form>
    </div>
  <div>
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-1">
    <button class="btn btn-primary" id="btn_dodajKnjigu">Dodaj Knjigu</button>
    </div>
    <div class="col-md-5"></div>
  </div>
  </div>
  </div>

  <script src="./js/dragAndDrop.js"></script>
</body>
</html>