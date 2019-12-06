<?php
include_once "scripts/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor Lista Želja</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- js -->
    <script src="./scripts/main.js"></script>
  </head>
  <body>
  <!-- navigacija -->
  <?php
    getNavigation();
  ?>
  <!-- telo -->

  <div class="container">
    <div class="page-header">
      <h1>
        Lista želja
      </h1>
    </div>
      <?php
      if(isset($_SESSION["administrator"])){
        $id=$_SESSION["korisnik_id"];
        $sql="SELECT * FROM liste_zelja WHERE korisnik_id=$id;";
        $rezultat =mysqli_query($db,$sql);
        if($rezultat){
          while($knjigaUListi = mysqli_fetch_assoc($rezultat)){
            $idKnjige=$knjigaUListi["knjiga_id"];
            $sql_dohvati_knjigu="SELECT `naslov`, `autor`, `slika`, `opis` FROM `knjiga` WHERE knjiga_id=$idKnjige;";
            $knjiga=mysqli_fetch_assoc(mysqli_query($db,$sql_dohvati_knjigu));
            $autor=$knjiga["autor"];
            $naslov=$knjiga["naslov"];
            $slika=$knjiga["slika"];
            $opis=$knjiga["opis"];
            echo '
            <div class="row u-listi">
            <div class="col-md-2">
            <img src="'.$slika.'" class="slicica"alt="Putevi svile Piter Frankopan">
            </div>
            <h3>'.$naslov.' <small>'.$autor.'</small> </h3>
            <p class="col-md-9">'.$opis.'
            <a href="./book.php?id='.$idKnjige.'">Pročitaj više...</a>
            </p>
            <p class="col-md-1 text-center">cena RSD <br>
            <i data-id="'.$idKnjige.'" onclick="addToFavorites(this)" class="fas fa-heart fa-2x" ></i>
            <i data-id="'.$idKnjige.'" onclick="addToCart(this)" class="fas fa-shopping-cart fa-2x"></i>
            </p>
            </div>';
            
          }
        }  
      
      }else echo "Morate biti ulogovani kako bi koristili listu zelja";
      ?>

     

  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>