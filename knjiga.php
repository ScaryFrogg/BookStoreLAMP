<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bukstor Knjiga</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- navigacija -->
    <?php 
    echo file_get_contents("./html/nav.html");
    ?>
    <!-- telo -->
    <div class="container knjiga">
      <div class="row">
        <div class="col-md-2">
          <img src="./img/knjige/bookfiller.png" class="img-responsive center-block" alt="knjiga nema sliku">
          <div class="text-center">
            <p>Format:</p>
            <p>Broj strana:</p>
            <p>Pismo:</p>
            <p>Povez:</p>
            <p>Godina izdanja:</p>
            <p>ISBN:</p>
            <p>Prevodilac:</p>
          </div>
        </div>
        <div class="col-md-7">  
          <h2 class="naslov-knjige">Naslov Knjige</h2>
          <h3>Autor Knjige</h3>
          <h4>Kategorija:</h4>
          <p class="oknjizi">O knjizi</p>
        </div>
        <div class="col-md-3">
          <div class="cena">
            <h3>Cena: </h3>
            <h4>Popust: </h4>
            <h3 class="ukupno">Ukupno: </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php 
    echo file_get_contents("./html/footer.html");
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>