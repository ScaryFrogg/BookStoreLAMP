<?php
include_once "scripts/functions.php";
$favs = (isset($_SESSION["user_id"])) ? $_SESSION["favs"]:array();
$search= (!isset($_GET['search'])||$_GET['search']=="") ? "": mysqli_real_escape_string($db,$_GET['search']);
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
        <?php
        if($search=="")echo "Books"; else echo $_GET['search'];
        ?>
      </h1>
    </div>
    <?php
      $sql ="SELECT * FROM `books` WHERE author LIKE '%$search%' OR title LIKE '%$search%' OR categories LIKE '%$search%';";
      $result = mysqli_query($db,$sql);
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
          $author=$row["author"];
          $title=$row["title"];
          $imgPath=$row["img_src"];
          $id=$row['id'];
          $farORfas=(in_array($id,$favs))?"fas":"far";
          echo '
              <div class=" col-lg-3 col-md-3 col-xs-6">
              <div class="thumbnail">
              <div class="caption">
              <img src="'.$imgPath.'" class="img-responsive center-block" alt='.$title.' '.$author.'" >
      
              <p class="text-center">'.$author.'</p>
              <h3 class="text-center">'.$title.'</h3>

              <p class="text-center"><i data-id="'.$id.'" onclick="addToFavorites(this)" class="'.$farORfas.' fa-heart fa-2x"></i>
              <i data-id="'.$id.'" onclick="addToCart(this)" class="fas fa-shopping-cart fa-2x"></i></p>
              <p class="text-center"><a href="./book.php?id='.$id.'" class="btn btn-primary" role="button">More</a></p>
              </div>
              </div>
              </div>
              ';
        }
      }else echo "No books were found matching given author, title or genre";
    ?>
    </div>
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