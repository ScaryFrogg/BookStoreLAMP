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
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="scripts/updateUsers.js"></script>
    <title>Bukstor Users</title>
    <style>
    .btn-warning,td,.btn-danger{
        color: black;
    }
    table{
        margin-top:5vh;
    }
    td,th{
        padding:4px;
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
    <div class="container">
    <div class="page-header">
        <h1>Users</h1>
    </div>
    <table>
    <thead><th>First Name</th>
    <th>Last Name</th><th>Email</th><th>Type</th> </thead>
    <?php
    $pretraga_korisnika_query="SELECT * FROM `users`";
    $rezultat =mysqli_query($db,$pretraga_korisnika_query);
    while($users = mysqli_fetch_assoc($rezultat)){
        echo '<tr>';
        foreach($users as $key=>$value){
            if($key=="email"||$key=="name"||$key=="last_name"||$key=="admin"){
                if($key=="admin")
                    echo ($value) ? "<td class='text-center' name='type'>Admin</td><td name='button'><button onclick=updateUser(".$users["user_id"].",'downgrade',this) class='btn btn-warning'>Downgrade to Customer</button></td>":"<td class='text-center' name='type'>Customer</td><td name='button'><button onclick=updateUser(".$users["user_id"].",'upgrade',this) class='btn center-block btn-danger'>Upgrade to Admin</button></td>";
                    else
                    echo "<td>$value</td>";
            }
            
        }
        echo '</tr>';
    }
    ?>
        
    </table>
    </div>
    <!-- footer -->
    <?php 
        getHtml("footer");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</body>
</html>

