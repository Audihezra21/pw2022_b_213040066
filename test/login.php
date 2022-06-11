<?php 
session_start();
require 'functions.php';

// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $conn = koneksi();
//     $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

//     //cek email
//     if(mysqli_num_rows($result) === 1 ) {

//         //cek password
//         $row = mysqli_fetch_assoc($result);
//         if(password_verify($password, $row["password"])) {
			

//             //cek role admin
//             if ($row['role']=="admin") {
//                 $_SESSION['id_admin'] = $row['id'];
//                 $_SESSION['role'] = "admin";
//                   header("location:homeadmin.php");
//             } else if ($row['role']=="user") {
//                 $_SESSION['id_user'] = $row['id'];
//                 $_SESSION['role'] = "user";
//                   header("location:homeuser.php");
//             }
//         }
//     }
// cek tombol login
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE email = '$email'");

    // cek email

    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION['role'] = $row["role"];
            $_SESSION['id'] = $row["id"];
			
			if ($row['role'] == 'admin') {
                echo "
                <script>
                    alert('Berhasil Login Sebagai Admin!!!');
                    document.location.href = 'homeadmin.php';
                </script>
            ";
            } elseif ($row['role'] == 'user') {
                echo "
                <script>
                    alert('Berhasil Login Sebagai Anggota!!!');
                    document.location.href = 'homeuser.php';
                </script>
            ";
            }


    $error = true;
}

	}
}
?>
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
					<h2 class="heading-section">Login First...</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form method="POST" class="register-form" id="login-form">
		      		<div class="form-group">
		      			<input type="text" name="email" class="form-control"  placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password" type="password" name="password" class="form-control" placeholder="Password"  required>
	              <span toggle="password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
			  
	          <p class="w-100 text-center">&mdash; Back to home Or Sign up &mdash;</p>
				<div class="social d-flex text-center">
			  <a href="index.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Back to home </a>
			  </div>
	          <div class="social d-flex text-center">
	          	<a href="register.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Sign Up </a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	

	</body>
</html>

