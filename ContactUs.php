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
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    
                </ul>
            </div>
            <!-- Add boostrap menu ber icon -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- Add boostrap menu ber icon end -->
        </nav>

<!-- navber end -->


    
    <h1 style = "color:rgb(101, 202, 7)">Contact Us</h1>
		<input placeholder="Your Name">
		<input placeholder="Your Email">
		<input placeholder="Phone">
		<input placeholder="Message">
		<button>Send</button>   
</body>
</html>

