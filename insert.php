<?php

include 'bd.php';

if(isset($_POST['done'])){
  $key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';
  function encryptthis($data, $key) {
  $encryption_key = base64_decode($key);
  $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
  $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
  return base64_encode($encrypted . '::' . $iv);
  }

 $username = $_POST['username'];
 #$password = $_POST['password'];
 $password = encryptthis( $_POST['password'],$key);
 $User_type = $_POST['User_type'];
 $q = " INSERT INTO `people`(`name`, `password`,`User_type`) VALUES ( '$username', '$password','$User_type' )";

 $query = mysqli_query($conn,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>
 <label> User_type: </label>
 <input type="text" name="User_type" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>