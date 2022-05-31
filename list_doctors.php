<?php
include("admin/connect.php");
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="list_doctors.css">
    <title><?php echo $_POST['doctor_specialist'];?></title>
  </head>
  <body>
        <!--nav area start-->
        <div class="topnav">
        <a class="active" href="index2.php">Home</a>
        <form >

        <!-- <input onkeyup="showResult(this.value)" type="text" placeholder="Search.." >  -->
        <ul class="result_Box" id="result"></ul>

        </form>
        <!-- <input type="text" placeholder="Search.."> -->
      </div>
    <!--nav area ends-->
<div class="container">
<div class="row">

<?php
        $doctor_specialist=$_POST['doctor_specialist'];
        $s="SELECT *FROM doctors WHERE doctor_speciality = '$doctor_specialist' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
        ?>

 


<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch " >
      <div class="card">
        <img class="card-img-top" src="admin/<?php echo $row['doctor_picture'];?>" alt="card image" loading="lazy" >
        <div class="card-body d-flex flex-column ">
          <h4 class="card-title"><?php echo $row['doctor_name']; ?></h4>
          <p class="card-text shortdes"><?php echo $row['doctor_description'];  ?> </p>
		 <a href="doc_profile.php?doctorid=<?php echo $row['doctor_id'];  ?>"  class="btn btn-danger mt-auto btn-block " role="button">About</a>
          
        </div>
      </div>
      </div>
		<?php
               }
            }
        ?>

    
</div>
</div>
  </body>
</html>


<script type="text/javascript" src="searchscript.js"></script>