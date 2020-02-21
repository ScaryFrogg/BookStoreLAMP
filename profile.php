<?php
include_once "./scripts/functions.php";
if(!isset($_SESSION["user_id"])){
  header("Location: index.php");
}else{
  $email=$_SESSION["email"];
  $selectUserSQL="SELECT * FROM users WHERE email ='$email' LIMIT 1";
  $results =mysqli_query($db,$selectUserSQL);
  $user = mysqli_fetch_assoc($results);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
  <!-- Navigation -->
  <?php
    getNavigation();
  ?>
  <!-- Body -->
  <div class="container">
  <div class="page-header">
    <h1>
    <i class="fas fa-user"></i> Profile
    </h1>
  </div>
  <div>
      <?php /* Check inputs and change password */
        if(isset($_POST["btnConfirm"])){
          $oldPw=mysqli_real_escape_string($db, $_POST["oldPw"]);
          $newPw=mysqli_real_escape_string($db, $_POST["newPw"]);
          $rePw=mysqli_real_escape_string($db, $_POST["rePw"]);
          
          if($user){
            if(!($newPw===$rePw)){
              echo '<div class="alert alert-danger fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>New passwords do not match!</strong>
              </div>';
            }else{
              if($user["password"]==md5($oldPw)){
                $newPassword=md5($newPw);
                $updatePwSQL="UPDATE `users` SET `password`='".$newPassword."' WHERE `email`='".$email."'";
                mysqli_query($db,$updatePwSQL);
                echo '<div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Password changed successfully</strong>
                  </div>';
              }else{
                echo '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Wrong current password!</strong>
                    </div>';
              }
            }
          }
        }
      ?>
      <ul class="list-group">
      <li class="list-group-item">Frist Name: <?php echo $user["first_name"];?></li> 
      <li class="list-group-item">Last Name: <?php echo $user["last_name"];?></li> 
      <li class="list-group-item">Email: <?php echo $user["email"];?></li> 
      <li class="list-group-item">Account type: <?php echo $user["admin"]==0?"Customer":"Admin";?></li>
      </ul>
      Mailing list: 
      <button class="btn btn-primary" onClick="menageSubscription(this,'<?php echo $user['email'];?>')" type="button"><?php echo (!$user["subscribed"])? "Subscribe" : "Unsubscribe";?></button>
      <br> <br>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapseExample">
        Change Password
      </button>
     <div class="collapse" id="collapse">
        <div class="well">
          <form action="./profile.php" method="POST">
          <div class="input-group">
          <label for="oldPw">Enter current password</label>
          <input class="form-control" type="password" id="oldPw" name="oldPw" placeholder="Enter current password"required>
          </div>
          <br>
          <div class="input-group">
          <label for="newPw">Enter new password</label>
          <input class="form-control" type="password" id="newPw" name="newPw" placeholder="Enter new password"required>
          </div>
          <br>
          <div class="input-group">
          <label for="rePw">Repeat new password</label>
          <input class="form-control" type="password" id="rePw" name="rePw" placeholder="Repeat new password" required>
          </div>
          <br>
          <button class="btn btn-primary" name="btnConfirm" type="submit">Confirm changes</button>
          </form>
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