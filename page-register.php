<!doctype html>
<html lang="en">

<head>
<title>:: CDC HR :: Sign Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-orange">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="assets/images/logo-white.svg" alt="Lucid">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" method="POST">
                                <div class="form-group">
                                    <label for="signup-firstname" class="control-label sr-only">Firstname</label>
                                    <input type="text" class="form-control" id="signup-firstname" name="signup-firstname" placeholder="Firstname" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-lastname" class="control-label sr-only">Lastname</label>
                                    <input type="text" class="form-control" id="signup-lastname" name="signup-lastname" placeholder="Lastname" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Your email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="B_Register">REGISTER</button>
                                <div class="bottom">
                                    <span class="helper-text">Already have an account? <a href="page-login.php">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
    <!-- END WRAPPER -->
    
</body>
</html>
<?php
    include_once('settings/db.php');
    if(isset($_POST["B_Register"]))
    {
        $P_Firstname = $_POST['signup-firstname'];
        $P_Lastname = $_POST['signup-lastname'];
        $P_Email = $_POST['signup-email'];
        $P_Password = md5($_POST['signup-password']);
        $P_Hash = password_hash($P_Password, PASSWORD_DEFAULT);
        
        try {
          $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "EXEC [Users].[sp_Register User] '$P_Firstname', '$P_Lastname', '$P_Email', '$P_Password', '$P_Hash'";
          $conn->exec($sql);
          header("Location: page-login.php?email=$P_Email");
        } 
        catch(PDOException $e) {
            if ($e->getCode() == 23000) {
                echo '<script>swal("Oops...", "An account already exists at your email address!", "error");</script>';
            }
            else{
                echo '<script>swal("Oops...", "An unknown problem has surfaced. Please try again later!", "error");</script>';
            }
        }
        
        $conn = null;
    }
?>
