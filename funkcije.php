<?php 

    //
    $listazelja="'listazelja'";
    $korpa="'korpa'";

    //Konekcija sa bazom
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");


    //Dohvatanje htmla
    function isipisHtml($x){
        $path="./html/$x.html";
        if (file_exists($path)){
            echo file_get_contents($path);
        }else{
            echo "Fajl nije pronadjen";
        }
    }

?> 