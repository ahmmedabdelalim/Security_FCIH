<?php
require 'bd.php';
$key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';
function decryptthis($data, $key) {
  $encryption_key = base64_decode($key);
  list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
  return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
  }
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
     
   
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=  $_POST['pass'];
 
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 
 //Selecting Database
 
 //sql query to fetch information of registerd user and finds user match.
 
 $query = mysqli_query($conn, "SELECT * FROM people WHERE  name='$user' ");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
    $logged_in_user = mysqli_fetch_assoc($query);
    if ($logged_in_user['User_type'] == 'admin') {

        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: dispaly.php');		  
    }else{
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";

        header('location:user.php');
    }
}else {
    ##array_push($errors, "Wrong username/password combination");
print("nono");
 mysqli_close($conn); // Closing connection
 }
}
}
 
?>