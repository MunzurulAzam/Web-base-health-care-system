<?php
include("admin/connect.php");

session_start();
 if (!isset($_SESSION['login'])) {
    header("location:index.php");
     die();
}


        $doctorid=$_GET['doctorid'];
        $s="SELECT *FROM doctors WHERE doctor_id = '$doctorid' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {



?>

<!doctype html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meata name="view point " content="with=device-width, initial scale = 1.0">
        <!-- link html file with css class_file -->
        <link rel="stylesheet" href="Style.css">
        <!-- link html file with css class_file end-->

        <!-- for navber contend front style and all front style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <!-- navber contend front style end -->

        <!-- Boostrap cdn icon extention-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Boostrap cdn icon extention and all front style end-->
    
    <title>Contact & About Us</title>
</head>

<!-- <style>
    div 
        {
        padding-top: 147px;
        padding-right: 180px;
        padding-bottom: 50px;
        padding-left: 990px;
        height: 100px;
        width: 50%;
        }
    body 
        {
        background-image: url('Bacground.png');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: cover;

        width: 30%;
        float: right;
        padding: 150px;
        }
</style> -->
<body>
    <!-- apply css in header -->
    <section class="header">

<!-- navber start -->
<nav>
            <a href="index.php">
                <!-- <img src="image/logo.png"> -->

            </a>
            <div class="nav-links" id="navLinks">
                <!-- Add boostrap close icon -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <!-- Add boostrap close icon close -->
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                </ul>
            </div>
            <!-- Add boostrap menu ber icon -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- Add boostrap menu ber icon end -->
        </nav>

<!-- navber end -->


    
    <h1 style = "color:rgb(101, 202, 7)">Take Appointment</h1>
   
    <h4 style = "color:rgb(255, 255, 255)">

   <?php 

      echo "Doctor Name: ", $row['doctor_name'],"<br>";
      echo "Doctor Adress: ", $row['doctor_address'],"<br>";

      echo "User ID: ",$_SESSION["login"],"<br>";
      echo "User Name: ",$_SESSION["user_name"],"<br>";
      echo "User Email: ",$_SESSION["user_email"],"<br>";
      

   ?>
   </h4>
    
    <form action="take.php" method="post">
          <!-- <input type="hidden" name="doctor_specialist" value="Medicine/General Physician"> -->
		  <!-- <button type="submit" class="btn btn-primary btn-round  " role="button">Take</button> -->
		 <a href="take.php?doctorid=<?php echo $row['doctor_id'];?>" class="btn btn-danger mt-auto btn-block " role="button">Take</a>

		  </form>
   </body>
</html>




        <?php
               }
            }
        ?>