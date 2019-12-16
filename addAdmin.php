<?php
include_once "scripts/functions.php";
if ((!isset($_SESSION["email"]))||$_SESSION["admin"]==0)
    header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukstor Users</title>
    <style>
    td{
        border:1px solid black;
    }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php
        getNavigation();
    ?>
    <!-- Body -->
    <table>
    <?php
    $pretraga_korisnika_query="SELECT * FROM `korisnici`";
    $rezultat =mysqli_query($db,$pretraga_korisnika_query);
    while($users = mysqli_fetch_assoc($rezultat)){
        echo '<tr>';
        foreach($users as $key=>$value){
            if($key=="email"||$key=="ime"||$key=="prezime"||$key=="administrator"){
                if($key=="administrator")
                    echo ($value) ? "<td data=".$users["korisnik_id"].">Administrator</td>":"<td data=".$users["korisnik_id"].">Kupac</td>";
                    else
                    echo "<td>$value</td>";
            }
            
        }
        echo '</tr>';
    }
    ?>
        
    </table>
    <!-- footer -->
    <?php 
        getHtml("footer");
    ?>
</body>
</html>

