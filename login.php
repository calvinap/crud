<?php
session_start();
require 'function.php';

//cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
//ambil username id
$result = mysqli_query($conn ,"SELECT username FROM user WHERE id = $id ");
$row =mysqli_fetch_assoc($result);

//cek cookie dan username
if($key === hash('sha256',$row['username'])){
  $_SESSION['login'] = true;
}
}

if (isset($_SESSION ["login"])){
	header("location: index.php");
	exit;
}
if(isset($_POST["login"])){

  $username = $_POST["username"];
   $password = $_POST["password"];
  
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1){

    $row = mysqli_fetch_assoc($result);
   if (password_verify($password, $row["password"])){
    //session
    $_SESSION["login"] = true;
    //remember me
    if (isset($_POST['remember'])){
      //cookie
      setcookie('id',$row['id'], time()+60);
      setcookie('key', hash('sha256',$row['username']),time()+60);  
    }
      header("location: index.php");
      exit;
    }
  }
  $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="css/login.css">
 </head>
<body>
  <div class="container">
  <div class="login">
  <form action="" method="post">   
  <h1>login</h1>
  <hr>
  <p>EXCLUSIVE MOTOSPORT</p>
  <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>
      <label for="username">Username :</label>
      <input type="text" name="username" id="username">
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
     <label for="remember">Remember Me <input type="checkbox" name="remember" id="remember"></label>
      <button type="submit" name="login">LOGIN</button>
      <br>
    <a href="registrasi.php"> REGISTRASI</a>
  </form>
  </div>
  <div class="right"><img src="https://cdn.cdnlogo.com/logos/m/62/motorsport-com.svg"></div>
  </div>
</body>
</html>