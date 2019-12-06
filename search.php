<?php
session_start();
include_once "funkcije.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
    <?php
        if(isset($_POST['btn-search'])){
            $search= mysqli_real_escape_string($db,$_POST['search']);
            $sql ="SELECT * FROM `knjiga` WHERE autor LIKE '%$search%' OR naslov LIKE '%$search%' OR kategorija LIKE '%$search%';";
            $rezultat = mysqli_query($db,$sql);
            if(mysqli_num_rows($rezultat)>0){
              while($red = mysqli_fetch_assoc($rezultat)){
                $autor=$red["autor"];
                $naslov=$red["naslov"];
                $putDoSlike=$red["slika"];
                $id=$red['knjiga_id'];
                echo '
                    <div class=" col-lg-3 col-md-3 col-xs-6">
                    <div class="thumbnail">
                    <div class="caption">
                    <img src="'.$putDoSlike.'" class="img-responsive center-block" >
            
                    <p class="text-center">'.$autor.'</p>
                    <h3 class="text-center">'.$naslov.'</h3>

                    <p class="text-center"><i data-id="'.$id.'" onclick="dodajU('.$listazelja.',this)" class="fas fa-heart fa-2x"></i><i data-id="'.$id.'" onclick="dodajU('.$korpa.',this)" class="fas fa-shopping-cart fa-2x"></i></p>
                    <p class="text-center"><a href="./knjiga.php?id='.$id.'" class="btn btn-primary" role="button">Više o knjizi</a></p>
                    </div>
                    </div>
                    </div>
                    ';
              }
            }else echo "Nije pronadjena ni jedna takva knjiga";
        }else header("Location: index.php");
    ?>
    </div>
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>