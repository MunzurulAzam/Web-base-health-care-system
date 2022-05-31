<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
    die();
}

include("admin/connect.php");

// $email=$_POST['email'];
// $name=$_POST['name'];
// $password=$_POST['password'];
$a=$_GET['doctorid'];
$b=$_SESSION["login"];


$sql = "INSERT INTO appointment (user_id,doctor_id) 
VALUES ('$b', '$a')";

if($conn->query($sql) === TRUE){
	?>
	<script>
	alert("worked successfully");
		<?php 
			header("Location: index2.php");
		?>
		

	</script>

	<?php 
			
		?>
	<?php




}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
	}

	header("Location: index2.php");

?>