<?php
include("connect.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>addDoctor</title>
    <link rel="stylesheet" herf="style.css"/>

    <link rel="stylesheet" href="cssFordoctorAdd.css"/>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">

                    <center><h1>Add a new Doctor</h1></center>
                    <form action="" method="post" enctype="multipart/form-data" class="from-group text text-center ">


                            
                                <label>Doctor Name</label>
                                <!-- php name lastname -->
                                <input type="text" name="dname" class="form-control"
                                    placeholder="Enter Doctor Name..!">
                        


        

                        <label>Email</label>
                        <!-- php name email -->
                        <input type="text" name="email" class="form-control"
                            placeholder="Enter Doctor Email Address..!">


                            <!-- password start -->
                            <label>Password</label>
                        <!-- php name email -->
                        <input type="password" name="password" class="form-control"
                            placeholder="Doctor password!">

                            <!-- password end  -->

                        <label>Doctor Address</label>
                        
                        <!-- php name address  -->

                        <input type="text" name="address" class="form-control"
                            placeholder="Please select dooctor Address..!">


                        <!-- doctor longitude and latitude -->

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Longitude</label>
                                <!-- php name longitude -->
                                <input type="text" name="longitude" class="form-control"
                                    placeholder="Enter longitude!">
                            </div>
                            <div class="col-lg-6">
                                <label>Latitude</label>
                                <!-- php name latitude -->
                                <input type="text" name="latitude" class="form-control"
                                    placeholder="Enter latitude!">
                            </div>


                        </div>


                        <!-- end  -->
                            
                            
                            <div class="row">
                        <label>Gender</lebel>

                            <!-- php name gender -->
                        <select class="form-control" name="gender">
                            <option name="gender">Select Gender</option>
                            <option name="gender">Male</option>
                            <option name="gender">Female</option>
                            <option name="gender">Other</option>
                        </select>


                        <div>
                            <label>Select picture</label>
                            <!-- php name profile_picture -->
                            <input type="file" id="files" name="upload_file" class="form-control" placeholder="Doctor Profile Picture..!">

                        </div>

                    </div>


                        <label>Speciality</label>
                        <!-- php name speciality -->
                        <select class="form-control" name="speciality">
                            <option>Select Speciality</option>
                            <option name="speciality">Medicine/General Physician</option>
                            <option name="speciality">Internal Medicine</option>
                            <option name="speciality">Child Care/Pediatrics</option>
                            <option name="speciality">Dental Care/Dentistry</option>
                            <option name="speciality">Gynecology</option>
                            <option name="speciality">Heart/Cardiology</option>
                            <option name="speciality">Lungs/Pulmonology</option>
                            <option name="speciality">Cancer/Oncology</option>

                        </select>


                        <label>Doctor Qualification</label>
                        <select class="form-control" name="qualification">
                            <option>Select Qualification</option>
                            <option name="qualification">MBBS</option>
                            <option name="qualification">FRCS</option>


                        </select>

                        <div>
                            <label>Fee Per Visit</label>
                            <!-- php name fess -->
                            <input type="number" name="fees" class="form-control">
                        </div>


                        <div>
                            <label>Doctor Description</label>
                            <!-- php  name description  -->
                            <textarea class="form-control" id="doctor_description" rows="3"
                                placeholder="Doctor Profile Info..!" name="description"></textarea>
                        </div>
                        <br>


                        <!-- <center><button type="add doctor" class="btn btn-outline-success" >Add Doctor</button></center> -->
                        <center><input type="submit" class="btn btn-outline-success" name="submit" value="Add Doctor"></center>

                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>


        </div>

    </div>

</body>

</html>
 

<?php
if (isset($_POST['submit'])) {
//variables

    $d_name=$_POST['dname'];
    $d_email=$_POST['email'];
    $d_password=$_POST['password'];
    $d_address=$_POST['address'];
    $d_longitude=$_POST['longitude'];
    $d_latitude=$_POST['latitude'];
    $d_gender=$_POST['gender'];


    //upload file code....

    $filename = $_FILES["upload_file"]["name"];
    $tempname = $_FILES["upload_file"]["tmp_name"];
    $folder = "image/" . $filename;
    move_uploaded_file($tempname, $folder);

    $d_speciality=$_POST['speciality'];
    $d_qualification=$_POST['qualification'];
    $d_fees=$_POST['fees'];
    $d_description=$_POST['description'];




    $sql = "INSERT INTO doctors(doctor_name,doctor_gender,doctor_speciality,doctor_log,doctor_lat,doctor_address,doctor_qualification,doctor_picture,doctor_description,doctor_fee,doctor_email,doctor_password)
    VALUES('$d_name','$d_gender','$d_speciality','$d_longitude','$d_latitude','$d_address','$d_qualification','$folder','$d_description','$d_fees','$d_email','$d_password')";
    mysqli_query($conn, $sql);
}
//mysqli_close($conn);

?>