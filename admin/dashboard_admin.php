<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0px;
            border: 0px;
        }
        
        h1 {
            font-style: oblique;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
        }
        
        #header {
            width: 100%;
            height: 180px;
            background-color: hsla(204, 94%, 50%, 0.548);
            color: white;
            filter: blur(0.8px);
            -webkit-filter: blur(0.8px);
        }
        
        #sidebar {
            width: 300px;
            height: 700px;
            background-color: hsla(204, 94%, 50%, 0.548);
            float: left;
        }
        
        #data {
            height: 700px;
            max-width: 100%;
            max-height: 100%;
            margin-left: 300px;
            background-image: url("image/Bacground.png");
            filter: blur(20px);
            -webkit-filter: blur(20px);
        }
        
        #adminlogo {
            background-color: white;
            border-radius: 60px;
            max-width: 95px;
            max-height: 100px;
            margin-top: 20px;
        }
        
        ul li {
            padding: 25px;
            border-bottom: 2px solid navy;
            padding-left: 0px;
            text-decoration: none;
            list-style-type: none;
        }
        
        a {
            text-decoration: none;
        }
        
        ul li :hover {
            background: rgb(230, 9, 9);
            color: rgb(247, 242, 242);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="header">
        <center><img src="Image/admin.png" alt="adminlogo" id="adminlogo">
            <p>
                <h1>Wellcome to admin panel</h1>
            </p>


        </center>


    </div>


    <div id="sidebar">
        <ul>
            <li><a href="add_doctor.php">Add Doctor</a></li>
            <li><a href="../adminlogout.php"> Log Out</a></li>
        </ul>


    </div>


    <div id="data">

    </div>
</body>

</html>