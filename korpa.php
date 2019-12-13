<?php
include_once "functions.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor Korpa</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- js -->
    <script src="./js/main.js"></script>
  </head>
  <body>
  
  <!-- navigacija -->
  <?php
    ispisiNavigaciju();
  ?>
  <!-- telo -->

  <div class="container">
    <div class="page-header">
      <h1>
        Korpa
      </h1>
    </div>
    <?php
      if(isset($_SESSION["admin"])){
        $id=$_SESSION["korisnik_id"];
        $sql="SELECT * FROM korpe WHERE korisnik_id=$id;";
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
            echo ' <div class="row u-listi">
            <div class="col-md-2">
            <img src="'.$slika.'" class="slicica"alt="Putevi svile Piter Frankopan">
            </div>
            <h3>'.$naslov.' <small>'.$autor.'</small> </h3>
            <p class="col-md-9">'.$opis.'
            <a href="./knjiga.php?id='.$idKnjige.'">Pročitaj više...</a>
            </p>
            <p class="col-md-1 text-center">1,599 RSD <br>
              <i data-id="'.$idKnjige.'" onclick="ukloniIzKorpe(this)" class="fas fa-trash-alt fa-2x"></i>
            </p>
            </div>';
            
          }
        }  
      
      }else echo "Morate biti ulogovani kako bi koristili listu zelja";
    ?>
  
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h3 class="text-center ukupno">Ukupno: TODO SABERI</h3>
        <button role="button" class="btn btn-primary  center-block">Plati</button>
        </p>
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