<?php

session_start();

include("admin/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$rememberme=$_POST['remember'];
$private_key = "!$//%$$//%$&=§$!&%&=§$!&%";

$sql = mysqli_query($conn, "SELECT count(*) as total from registration WHERE email = '".$email."' and 
   password = '".$password."'");

$row = mysqli_fetch_array($sql);

$login = "SELECT id,username FROM registration WHERE email = '$email' and password = '$password'";

$result = mysqli_query($conn, $login);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$id = $row['id'];
$username=$row['username'];

$count = mysqli_num_rows($result);
//cookie
if ($count == 1) {
   if(isset($rememberme)){
       setcookie('emailcookie',$email, time()+86400 * 30);
       setcookie('passwordcookie',$password=md5($password.$private_key), time()+86400 * 30);
   }
   $_SESSION["login"]=$id;
   $_SESSION["user_name"]=$username;

header("Location: index2.php");
exit();
}
else{
   $_SESSION["error"] = "Login Failed";
   header("Location: loginmain.php");
   exit();
}


?>