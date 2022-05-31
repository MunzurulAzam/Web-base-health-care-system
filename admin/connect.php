<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cse482";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn){
  // echo "ok";

}
else{
    echo "connection failed";
}

?>