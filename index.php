<html>


<head>
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
</head>

<body>
    <!-- apply css in header -->
    <section class="header">
        <!-- for navigation bar -->
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
                        <a href="loginmain.php">Specialist</a>
                    </li>
                    <li>
                        <a href="donation.php">Donate-US</a>
                    </li>
                    <li>
                        <a href="shop/contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="shop/about.php">About</a>
                    </li>
                    <li>
                        <a href="loginmain.php">Signup</a>
                    </li>
                </ul>
            </div>
            <!-- Add boostrap menu ber icon -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- Add boostrap menu ber icon end -->
        </nav>
        <div class="text-box">
            <h1>Healer</h1>
            <p>Make you life More healthy</p>
            <a href="loginmain.php" class="visit-btn">Signup or login to get service </a>
            <!-- <a href="adminloginmain.php" class="visit-btn">Signup or login as an Admin </a> -->
            <a href="doctorloginmain.php" class="visit-btn">Signup or login as a doctor </a>
            <a href="adminloginmain.php" class="visit-btn">Signup or login as an admin </a>
        </div>
    </section>
    <!-- doctor -->
    <section class="doctor">
        <h1>we offer some doctors and mediciens</h1>
        <p>Always laugh when you can, it is cheap medicine</p>
        <!-- for below content in the web-site -->
        <div class="row">
            <div class="app-col">
                <h3>Doctor</h3>
                <p>All doctors treat, but a good doctor lets nature heal.</p>
            </div>
            <div class="app-col">
                <h3>Medicien</h3>
                <p>Always laugh when you can, it is cheap medicine.</p>
            </div>

        </div>

    </section>
    <!-- Start facality -->
    <section class="facality">
        <!-- facality for doctor appointment online -->
        <h1>Our Facalitys</h1>
        <p>We can do always help peoples</p>
        <div class="row">
            <div class="facality-col">
                <img src="image/doctor_help.jpeg">
                <h3>Online Doctors</h3>
                <p>You will can take appointment by using our web-site</p>
            </div>
            <!-- facality for doctor appointment online end -->
            <!-- facality for doctor buy medicine online  -->
            <div class="facality-col">
                <img src="image/medicien-buy.jpeg">
                <h3>Buy medicien online</h3>
                <p>You will can buy medicien by using our web-site</p>
            </div>
        </div>
        <!-- facality for doctor buy medicine online end  -->

    </section>
    <!-- end facality -->
    <!-- start contruct us below in web-site -->
    
    <!-- end contruct us below in web-site -->
    <!-- start footer -->
    
    <!-- start footer -->









    <!-- javascript for toggle menu -->

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    <!-- javascript for toggle menu end -->
</body>


</html>