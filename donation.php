<?php
include  'admin/connect.php';




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="searchstyle.css">
    <title>Donation</title>
  </head>
  <body>

<div class="d-flex vw-100 vh-100 position-relative p-3 mx-auto flex-column text-center text-dark">

	<main role="main">
		<h1 class="mb-5">Support Us!! </h1>
		<p class="lead mb-5">Your valuable contributions can help small bussinesses like us grow!!</p>
		<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script 
		src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
		data-key="<?php echo $publishableKey?>"
		data-amount="500"
		data-name="Paymet System"
		data-description="Payment System Desc"
		data-image=""
		data-currency="usd"
		
	>		
	</script>

</form>
	</main>


</div>



    <script type="text/javascript" src="searchscript.js"></script>
  </body>
</html>