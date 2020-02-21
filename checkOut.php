<?php
include_once "scripts/functions.php";
if(!isset($_GET["ids"])) header("Location: index.php");
else $ids = explode("_",$_GET["ids"]);
$formids= $_GET["ids"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor Check out</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <!-- navigacija -->
  <?php
    getNavigation();
  ?>
  <!-- telo -->
  <?php
$totalPrice=0;
$list="";
if(isset($_SESSION["user_id"])){ 
    $userId=$_SESSION["user_id"];
    foreach ($ids as $id){                    
        $sql ="SELECT * FROM `shopping_carts` WHERE book_id=$id AND `user_id`=$userId";
        $result =mysqli_query($db,$sql);
        $bookFromList = mysqli_fetch_assoc($result);
        $sql_get_book="SELECT * FROM `books` WHERE id=$id;";
        $book=mysqli_fetch_assoc(mysqli_query($db,$sql_get_book));
        $author=$book["author"];
        $title=$book["title"];
        $imgPath=$book["img_src"];
        $about=$book["about"];
        $quantites = $bookFromList["quantites"];
        
        $discount = (isset($book["discount"]))? $book["discount"]: 0;
        $single = $book["price"]-($book["price"]*($discount/100));
        $total=$book["price"]*$quantites-($book["price"]*$quantites*($discount/100));
        $totalPrice=$totalPrice+$total;
        $list=$list.' <div class="row">
        <div class="col-md-5">
        <img src="'.$imgPath.'" class="slicica"alt="Putevi svile Piter Frankopan">
        </div>
        <h3>'.$title.' <small>'.$author.'</small> </h3>
        
        <p class="col-md-7 text-center">
        Single<span id="single">: '.$single.'</span>
        <br>
        Qt.<span id="qt">: '.$quantites.'</span>
        <br>
        Total<span id="price">: '.$total.'</span><br>

        </p>
        </div>';
    }
}else{
    $sql_get_book="SELECT * FROM `books` WHERE id=$ids[0];";
    $book=mysqli_fetch_assoc(mysqli_query($db,$sql_get_book));
    $author=$book["author"];
    $title=$book["title"];
    $imgPath=$book["img_src"];
    $about=$book["about"];
    $quantites = 1;
    
    $discount = (isset($book["discount"]))? $book["discount"]: 0;
    $single = $book["price"]-($book["price"]*($discount/100));
    $total=$book["price"]*$quantites-($book["price"]*$quantites*($discount/100));
    $totalPrice=$totalPrice+$total;
    $list=$list.' <div class="row">
    <div class="col-md-5">
    <img src="'.$imgPath.'" class="slicica"alt="Putevi svile Piter Frankopan">
    </div>
    <h3>'.$title.' <small>'.$author.'</small> </h3>
    
    <p class="col-md-7 text-center">
    Single<span id="single">: '.$single.'</span>
    <br>
    Qt.<span id="qt">: '.$quantites.'</span>
    <br>
    Total<span id="price">: '.$total.'</span><br>

    </p>
    </div>';

}
?>
    <div class="container" style="min-height: 75vh">
      <div class="page-header">
        <h1>Check out</h1>
      </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
        <form method="GET" action="/scripts/purchuse.php" >
          <div class="form-group">
            <label for="exampleInputName1"> <i class="fas fa-user"></i> Full Name</label>
            <input type="text" class="form-control"  placeholder="Enter your Full Name here">
          </div>
          <div class="form-group">
              <label for="exampleInputTelefon1"> <i class="fas fa-phone" aria-hidden="true"></i> Phone</label>
              <input type="tel" class="form-control"  placeholder="Enter your Phone here">
          </div>
          <div class="form-group">
            <label for="address"><i class="fas fa-map-marker" aria-hidden="true"></i> Address</label>
            <input type="text" class="form-control"  placeholder="Enter your Address here">
          </div> 
          <div class="form-group">
            <label for="zip"><i class="fas fa-map-marker" aria-hidden="true"></i> Postal code</label>
            <input type="number" class="form-control"  placeholder="Enter your Postal code here">
          </div>
          <h3 class="text-center total">Total: <?php echo $totalPrice?></h3>
          <button type="submit" class="btn btn-lg btn-primary center-block">Order</button>
          <input type="text" hidden name="ids" value=<?php echo $formids?>>
        </form>
        </div>
        <div class="col-md-6 scroll-container">
            <?php 
            echo $list;
            ?>
        </div>
    </div>
    </div>
      
    </div>
    
  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
      <!-- js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="scripts/bootstrap.min.js"></script>
      <script src="scripts/main.js"></script>
  </body>
</html>