<?php
session_start();
if (!(isset($_SESSION["email"]))||$_SESSION["administrator"]==0)
    header("Location: index.php");
include_once "funkcije.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    td{
        border:1px solid black;
    }
    </style>
</head>
<body>
    <table>
    <?php
    $pretraga_korisnika_query="SELECT * FROM `korisnici`";
    //$dodavanje_administratora_query="INSERT INTO korisnici (email , password , ime , prezime , administrator) VALUES ('$email','$password','$ime','$prezime',1);";
    $rezultat =mysqli_query($db,$pretraga_korisnika_query);
    while($korisnici = mysqli_fetch_assoc($rezultat)){
        echo '<tr>';
        foreach($korisnici as $kljuc=>$vrednost){
            if($kljuc=="email"||$kljuc=="ime"||$kljuc=="prezime"||$kljuc=="administrator"){
                if($kljuc=="administrator")
                    echo ($vrednost) ? "<td data=".$korisnici["korisnik_id"].">Administrator</td>":"<td data=".$korisnici["korisnik_id"].">Kupac</td>";
                    else
                    echo "<td>$vrednost</td>";
            }
            
        }
        echo '</tr>';
    }
    ?>
        
    </table>
</body>
</html>

