<?php
include("admin/connect.php");


  $q = $_GET["q"];

  $sql=" SELECT * FROM doctors WHERE doctor_name like '%".$q."%'  ";

  $result = mysqli_query($conn, $sql);

  $count=mysqli_num_rows($result);
  if($count>=1){


 
  while ($row = mysqli_fetch_assoc($result))
  {
     
  
    echo "<li>".$row["doctor_name"]."<a href='doctor_profile.php?doctorid=".$row["doctor_id"]."'>-See Doctor</a></li>";

 
  }

}
  
  else {

echo "No result found!";
  }