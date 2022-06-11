<?php 
    require 'functions.php';

    if(isset($_POST["register"]) ) {

        if(register($_POST) > 0 ) {
            echo "<script>
                    alert('Enjoy Your Visit, You Are Successfully Registered!');
                    document.location.href = 'login.php';
                    </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!-- _______________________________________________________________________________________ -->
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bglogin.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register First</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Register Here</h3>


		      	<form action="" method="POST" class="login-form" id="login-form">
		      		<div class="form-group">
		      			<input id="nama" type="text" name="nama" class="form-control"  placeholder="Nama" required>
		      		</div>

	            <div class="form-group">
	              <input id="email" type="email" name="email" class="form-control" placeholder="Email"  required>
	              <span toggle="email" class="fa fa-fw  field-icon "></span>
	            </div>
	            <div class="form-group">
	              <input id="password" type="password" name="password" class="form-control" placeholder="Password"  required>
	              <span toggle="password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	              <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirmation Password"  required>
	              <span toggle="password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="register" >Sign up</button>
	            </div>
	            
	          </form>


	          <p class="w-100 text-center">&mdash; Back to home Or Sign in &mdash;</p>
			  <div class="social d-flex text-center">
			  <a href="index.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Back to home </a>
			  </div>
	          <div class="social d-flex text-center">
	          	<a href="login.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Sign in </a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	

	</body>
</html>

