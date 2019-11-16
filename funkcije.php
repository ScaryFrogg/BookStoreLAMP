<?php 
    function isipisHtml($x){
        $path="./html/$x.html";
        if (file_exists($path)){
            echo file_get_contents($path);
        }else{
            echo "Fajl nije pronadjen";
        }
      
    }


?>