<?php 
require 'function.php';

if(isset($_POST["register"])){
  if(Registrasi($_POST) > 0 ){
    echo "<script> 
    alert('user berhasil ditambahkan');
    </script>";
  }else{echo mysqli_error($conn);}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registrasi</title>
  <link rel="stylesheet" href="css/register.css">
</head>
<body>
  <div class="container">
  <div class="register">
  <h1>Registrasi</h1>
  <p>EXCLUSIVE MOTOSPORT</p>
  <form action="" method="post">
     <label for="username">username :</label>
      <input type="text" name="username" id="username">
      <label for="password">password :</label>
      <input type="password" name="password" id="password">
      <label for="password2">konfirmasi password :</label>
      <input type="password" name="password2" id="password2">
      <button type="submit" name="register">REGISTER</button>
    <a href="login.php"> KEMBALI KEHALAMAN LOGIN</a>
  </form>
  </div>
  <div class="right"><img src="https://cdn.cdnlogo.com/logos/m/62/motorsport-com.svg"></div>
  </div>
</body>
</html>