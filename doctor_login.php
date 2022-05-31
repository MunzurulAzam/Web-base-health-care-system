<?php

session_start();

include("admin/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$rememberme=$_POST['remember'];

$sql = mysqli_query($conn, "SELECT count(*) as total from doctors WHERE doctor_email = '".$email."' and 
   doctor_password = '".$password."'");

$row = mysqli_fetch_array($sql);

$login = "SELECT doctor_id,doctor_name FROM doctors WHERE doctor_email = '$email' and doctor_password = '$password'";

$result = mysqli_query($conn, $login);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$doctor_id = $row['doctor_id'];
$doctor_name=$row['doctor_name'];

$count = mysqli_num_rows($result);
//cookie
if ($count == 1) {
   if(isset($rememberme)){
       setcookie('emailcookie',$email, time()+86400 * 30);
       setcookie('passwordcookie',$password, time()+86400 * 30);
   }
   $_SESSION["doctor_id"]=$doctor_id;
   $_SESSION["doctor_name"]=$doctor_name;

header("Location: doc_d.php");
exit();
}
else{
   $_SESSION["error"] = "Login Failed";
   header("Location: doctorloginmain.php");
   exit();
}


?>