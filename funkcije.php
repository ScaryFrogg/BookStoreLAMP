<?php 
    function isipisHtml($x){
        $path="./html/$x.html";
        if (file_exists($path)){
            echo file_get_contents($path);
        }else{
            echo "Fajl nije pronadjen";
        }
    }
    $nova_knjiga_query = 'INSERT INTO `knjiga`(`naslov`, `autor`, `opis`) VALUES ("[value-0]","[value-1]","[value-2]");' ;
    $update_knjiga_query ='UPDATE `knjiga` SET `naslov`=[value-0],`autor`=[value-1],`opis`=[value-2] WHERE `id`=[value-3];';

?> 