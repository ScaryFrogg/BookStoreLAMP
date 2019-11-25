<?php
session_start();
if (!(isset($_SESSION["email"]))&&(!$_SESSION["tip_naloga"]=="administrator")){
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
    <title>Dodaj Knjigu</title>
    <style>
      #drop-area{
        border: 5px solid purple;
        height: 20vw;
        width: 20vw;
        position:relative;
      }
      #drop-area>p{
        height: 20vw;
        width: 20vw;
        position:absolute;
        left: 50%;
        margin-left: -10vw;
        top: 50%;
        margin-top: -10vw;
        line-height:20vw;
        text-align:center
      }
    </style>
</head>
<body>
    <div id="drop-area">
        <p>Prevucite sliku ovde</p>
    </div>
    <img src="./img/logo.png" alt="" draggable=true>
    <script src="./js/dragAndDrop.js"></script>
</body>
</html>