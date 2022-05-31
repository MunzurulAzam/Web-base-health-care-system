




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS </title>-->
    <link rel="stylesheet" href="login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="http://online.hbs.edu/Style%20Library/api/resize.aspx?imgpath=/online/PublishingImages/blog/health-care-economics.jpg&w=1200&h=630" alt="">
      </div>
      <div class="back">
        <img class="backImg" src="http://online.hbs.edu/Style%20Library/api/resize.aspx?imgpath=/online/PublishingImages/blog/health-care-economics.jpg&w=1200&h=630" alt="">
      </div>
    </div>
    <!--log in form Start-->
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <!-- form action suru akhan theke  -->
          <form action="adminlogin.php" method="post" >
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" required name="email" placeholder="Enter your email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" required name="password" placeholder="Enter your password">
              </div>
            <div><input type="checkbox" name="remember" id="remember" value="1"> remember email and password</div>
              <div class="button input-box">
                <input type="submit" value="Login">
              </div>
              <!-- <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div> -->
            </div>
        </form>
      </div>
      <!-- Sign up form start  -->
        <!-- <div class="signup-form">
          <div class="title">Signup</div>
        <form  name="SignUpForm" onsubmit="signupform()" action="adminregistration.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" required name="name" id="name" placeholder="Enter your name" >
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" required name="email" id="email" placeholder="Enter your email" >
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password"  required name="password" id="password" placeholder="Enter your password" >
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" id="submit" value="Create Account">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
    Form Ends -->
  </div>
</body>
</html>

<!-- <script>
  function signupform() {

    var fname = document.SignUpForm.name.value;
    var email = document.SignUpForm.email.value;
    var password = document.SignUpForm.password.value;

    if (fname == null || fname == " ") {
      alert(" Name can 't be blank");
      return false;
    } else if (password.length < 6) {
      alert("Password must be at least 6 Digit long. ");
      return false;
    }else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
      return (true)
    }
    alert("You have entered an invalid email address! ")
    return (false)

  }
</script> -->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <?php
    if(isset($_SESSION["error"])){

      ?>
      
      <script>
    
    
    swal({
  title: "Opps!!",
  text: "<?php echo $_SESSION["error"];?>",
  icon: "error",
  button: "Try Again!",
});
    
    
    </script>

<?php
unset($_SESSION['error']);
    }

    else{


    }
    

    ?>