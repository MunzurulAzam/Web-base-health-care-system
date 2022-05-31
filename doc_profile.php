<?php
include("admin/connect.php");

session_start();
 if (!isset($_SESSION['login'])) {
    header("location:index.php");
     die();
}
// echo $_SESSION["login"];
// echo $_SESSION["user_name"];
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doc_profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
       integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
       integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <body>
        <!--nav area start-->
        <div class="topnav">
            <a class="active" href="index2.php">Home</a>
            <!-- <input type="text" placeholder="Search.."> -->
          </div>
        <!--nav area ends-->
        <?php
        $doctorid=$_GET['doctorid'];
        $s="SELECT *FROM doctors WHERE doctor_id = '$doctorid' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               $row = mysqli_fetch_assoc($result) ;

               
                $doctor_name = $row['doctor_name'];
                $doctor_dis = $row['doctor_description'];
                $doctor_image = $row['doctor_picture'];
                $long = $row['doctor_log'];
                $latt = $row['doctor_lat'];
                $doctor_specialist = $row['doctor_speciality'];
                $doctor_qualification=$row['doctor_qualification'];
                $doctor_add = $row['doctor_address'];
                $doctor_fee=$row['doctor_fee'];
                $doctor_gender=$row['doctor_gender'];
               }

        ?>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        
                        <h6 class="theme-color lead"><?php echo $doctor_specialist ?></h6>
                        <!-- <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p> -->
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Name</label>
                                    <p><?php echo $doctor_name; ?></p>
                                </div>
                                <div class="media">
                                    <label>Gender</label>
                                    <p><?php echo $doctor_gender ?></p>
                                </div>
                                <div class="media">
                                    <label>Address</label>
                                    <p><?php echo $doctor_add ?></p>
                                </div>
                                <div class="media">
                                    <label>Time</label>
                                    <p><?php echo $doctor_dis ?></p>
                                </div>
                                <div class="appointment">
                                   <!-- <button>Take Appointment</button> -->
       <a href="appointment.php?doctorid=<?php echo $doctorid;  ?>"  class="btn btn-danger mt-auto btn-block " role="button">Appointment</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="media">
                                    <label>E-mail</label>
                                    <p>info@domain.com</p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p>01712069892</p>
                                </div> -->
                          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <!-- img  -->
                    <div class="about-avatar">
                        <img src="admin/<?php echo $row['doctor_picture'];?>" title="" alt="" >
                    </div>
                </div>
            </div>
    <!-- Map  -->
                        <footer class="map">
                            <div id="googleMap" style="width:100%;height:400px;"></div>
                        
                            <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(<?php echo $long;?>,<?php echo $latt;?>),
          zoom:18,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        new google.maps.Marker({
    position: mapProp.center,
    map,
    
  });


        }



        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRQfyjtNHrQ--65DISVALMi75205lrh9Q&callback=myMap"></script>
        <script type="text/javascript" src="searchscript.js"></script>


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        </footer>
       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>