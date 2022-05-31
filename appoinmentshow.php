<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    
</style>
<body>
    <div style="height: 100vh" class="row justify-content-around align-items-center">
<?php
session_start();

$b=$_SESSION["doctor_id"];
include("admin/connect.php");
$query="SELECT registration.id,registration.email, registration.username FROM registration INNER JOIN appointment ON registration.id=appointment.user_id WHERE doctor_id=$b";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total)
{
    while($result=mysqli_fetch_assoc($data))
    {
        
        
        ?>

<!-- html code  -->


    <div style="box-shadow: 7px 7px 10px gray;" class="card col-md-3 m-2 h-25 border-0 text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result["username"] ?></h5>
            <p class="card-text"><?php echo $result["email"] ?></p>
        </div>
    </div>
    
    
    
    
    <?php
    }
}
else{
    echo "There is no record";
}
?>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

