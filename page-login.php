<?php
if(isset($_GET['email'])) {
    $g_Emailadress = $_GET['email'];
}else {
    $g_Emailadress = ""; 
}

?>
<!doctype html>
<html lang="en">

<head>
<title>:: CDC HR :: Login</title>
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
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" method="POST">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" name="signin-email" value="<?= $g_Emailadress;?>" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" name="signin-password" placeholder="Password" required>
                                </div>
                                <!--<div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>								
                                </div>-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="B_Login">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.php">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="page-register.php">Register</a></span>
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
    if(isset($_GET['rd'])) {
        if($_GET["rd"] == "2000")
        {   
            session_start();
            session_unset();
            session_destroy();
            echo '<script>swal("Oops...", "Your account has not yet been activated. Please do this first!", "error");</script>';
        }
        else if($_GET["rd"] == "9000")
        {   
            session_start();
            session_unset();
            session_destroy();
            echo '<script>swal("Good job!", "You have been successfully logged out!", "success");</script>';
        }
        else if($_GET["rd"] == "1300")
        {   
            session_start();
            session_unset();
            session_destroy();
            echo '<script>swal("Oops...", "It looks like your account has been blocked or deleted. Please contact us!", "error");</script>';
        }
    }
    session_start();
    include_once('settings/db.php');

    if(isset($_POST["B_Login"]))
    {
        $P_Email = $_POST['signin-email'];
        $P_Password = md5($_POST['signin-password']);

        try {
            $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $conn->prepare("EXEC [Users].[sp_Page_Login] '$P_Email', '$P_Password'");
            $query->execute();
            if ($query->rowCount() === 0) {
                echo '<script>swal("Oops...", "The combination of email and password is not recognized. Try again!", "error");</script>';
            } 
            else {
                while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                    $V_UserID = $result['UserID'];
                    $_SESSION['S_UserID'] = $result['UserID'];
                    $_SESSION['S_FirstName'] = $result['FirstName'];
                    $_SESSION['S_LastName'] = $result['LastName'];
                    $_SESSION['S_Name'] = $result['FirstName'] . " " . $result['LastName'];
                    $_SESSION['S_Email'] = $result['Email'];
                    $_SESSION['S_Hash'] = $result['Hash'];
                    $_SESSION['S_Profile_Picture'] = $result['Profile_Picture'];
                    $_SESSION['S_Active'] = $result['Active'];
                    $V_Active = $result['Active'];
                    $_SESSION['S_Role'] = $result['RoleID'];
                    if($V_Active == 1){
                        $_SESSION['S_Session_Active'] = "True";
                        header("location: index.php");
                    }
                    else{
                        $_SESSION['S_Session_Active'] = "False";
                        session_start();
                        session_unset();
                        session_destroy();
                        echo '<script>swal("Oops...", "Your account has not yet been activated. Please do this first!", "error");</script>';
                    }
                }
            }
          } 
          catch(PDOException $e) {
            echo $e->getMessage();
          }
          $conn = null;
    }
?>
