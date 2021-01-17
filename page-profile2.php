<?php
include('acc-check.php');
try {
    $UserID = $_SESSION['S_UserID'];
    $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare("EXEC [Users].[sp_Select_User_Info] $UserID");
    $query->execute();
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $V_UserID = $row['UserID'];
        $V_FirstName = $row['FirstName'];
        $V_LastName = $row['LastName'];
        $V_Email = $row['Email'];
        $V_RoleID = $row['RoleID'];
        $V_Phone = $row['Phone'];
        $V_Gender = $row['Gender'];
        $V_BirthDate = date("d-m-Y", strtotime($row['BirthDate']));
        $V_BirthDate_string = date("j F Y", strtotime($row['BirthDate']));
        $V_Address_Line_1 = $row['Address_Line_1'];
        $V_Address_Line_2 = $row['Address_Line_2'];
        $V_Zipcode = $row['Zipcode'];
        $V_City = $row['City'];
        $V_Country = $row['Country'];
        $V_Marital_Status = $row['Marital_Status'];
        $V_National_Insurance_Number = $row['National_Insurance_Number'];
        $V_Account_Number = $row['Account_Number'];
        $V_Enterprise_Email = $row['Enterprise_Email'];
        $V_Contact_Person_Name = $row['Contact_Person_Name'];
        $V_Contact_Person_Phone = $row['Contact_Person_Phone'];
        $V_Google_Address_Line_1 = str_replace(' ', '%20', $V_Address_Line_1);
        $V_Google_Address_Line_2 = str_replace(' ', '%20', $V_Address_Line_2);
        $V_Google_Address_Zipcode = $V_Zipcode;
        $V_Google_Address_City = $V_City;
        $V_Google_Address_Country = "$V_Country";
        
        $V_Google_Address = "https://maps.google.com/maps?q=".$V_Google_Address_Line_1.",".$V_Google_Address_Zipcode.$V_Google_Address_City."=&z=13&ie=UTF8&iwloc=&output=embed";    
    }
    
  } 
  catch(PDOException $e) {
    echo $e->getMessage();
  }
  $conn = null;

  if(isset($_POST["B_Update"]))
{
    try {
        $UserID = $_SESSION['S_UserID'];
        $U_P_FirstName = $_POST['FirstName'];
        $U_P_LastName = $_POST['LastName'];
        $U_P_Email = $_POST['Email'];
        $U_P_Phone = $_POST['Phone'];
        $U_P_Gender = $_POST['Gender'];
        $U_P_BirthDate = date("Y-m-d", strtotime($_POST['BirthDate']));
        $U_P_Address_Line_1 = $_POST['Address_Line_1'];
        $U_P_Address_Line_2 = $_POST['Address_Line_2'];
        $U_P_Zipcode = $_POST['ZipCode'];
        $U_P_City = $_POST['City'];
        $U_P_Country = $_POST['Country'];
        $U_P_National_Insurance_Number = $_POST['National_Insurance_Number'];
        $U_P_Account_Number = $_POST['Account_Number'];
        $U_P_Enterprise_Email = $_POST['Enterprise_Email'];
        $U_P_Contact_Person_Name = $_POST['Contact_Person_Name'];
        $U_P_Contact_Person_Phone = $_POST['Contact_Person_Phone'];
        $U_P_Marital = $_POST['Marital'];
        $U_P_Date = date("Y-m-d");  

      $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "EXEC [Users].[sp_Update_User_Info] '$UserID', '$U_P_Date', '$U_P_FirstName', '$U_P_LastName', '$U_P_Email', '$U_P_Phone', '$U_P_Gender', '$U_P_BirthDate', 
      '$U_P_Address_Line_1', '$U_P_Address_Line_2' , '$U_P_Zipcode', '$U_P_City', '$U_P_Country', '$U_P_Marital', '$U_P_National_Insurance_Number', '$U_P_Account_Number', 
      '$U_P_Enterprise_Email', '$U_P_Contact_Person_Name', '$U_P_Contact_Person_Phone'";
      $conn->exec($sql);
      header("Location: page-profile2.php?rd=200");
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    
    $conn = null;
}
?>
<!doctype html>
<html lang="en">

<head>
<title>:: CDC HR :: Profile</title>
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

<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blog.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">
    <?php include_once('navigation.php');?>


    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= $_SESSION['S_Name']?></strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li><a href="page-profile2.php"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.php"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.php?rd=9000"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">HR</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Project</a></li>
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><a href="index.php"><i class="icon-speedometer"></i><span>HR Dashboard</span></a></li>
                            <!--<li><a href="app-holidays.php"><i class="icon-list"></i>Holidays</a></li>
                            <li><a href="app-events.php"><i class="icon-calendar"></i>Events</a></li>
                            <li><a href="app-activities.php"><i class="icon-badge"></i>Activities</a></li>
                            <li><a href="app-social.php"><i class="icon-globe"></i>HR Social</a></li>-->
                            <li class="active">
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Employees</span></a>
                                <ul>
                                    <li class="active"><a href="page-profile2.php">My Profile</a></li>
                                    <li><a href="emp-all.php">All Employees</a></li>
                                    <!--<li><a href="emp-leave.php">Leave Requests</a></li>
                                    <li><a href="emp-attendance.php">Attendance</a></li>
                                    <li><a href="emp-departments.php">Departments</a></li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="#Accounts" class="has-arrow"><i class="icon-briefcase"></i><span>Accounts</span></a>
                                <ul>
                                    <li><a href="acc-payments.php">Payments</a></li>
                                    <li><a href="acc-expenses.php">Expenses</a></li>
                                    <li><a href="acc-invoices.php">Invoices</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Payroll" class="has-arrow"><i class="icon-credit-card"></i><span>Payroll</span></a>
                                <ul>
                                    <li><a href="payroll-payslip.php">Payslip</a></li>
                                    <li><a href="payroll-salary.php">Employee Salary</a></li>                                    
                                </ul>
                            </li>
                            <!--<li>
                                <a href="#Report" class="has-arrow"><i class="icon-bar-chart"></i><span>Report</span></a>
                                <ul>
                                    <li><a href="report-expense.php">Expense Report</a></li>
                                    <li><a href="report-invoice.php">Invoice Report</a></li>                                    
                                </ul>
                            </li>
                            <li><a href="app-users.php"><i class="icon-user"></i>Users</a></li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.php">Login</a></li>
                                    <li><a href="page-register.php">Register</a></li>
                                    <li><a href="page-lockscreen.php">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.php">Forgot Password</a></li>
                                    <li><a href="page-404.php">Page 404</a></li>
                                    <li><a href="page-403.php">Page 403</a></li>
                                    <li><a href="page-500.php">Page 500</a></li>
                                    <li><a href="page-503.php">Page 503</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane animated fadeIn" id="project_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><a href="index2.php"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                            <!--<li><a href="app-inbox.php"><i class="icon-envelope"></i>Inbox App</a></li>
                            <li><a href="app-chat.php"><i class="icon-bubbles"></i>Chat App</a></li>-->
                            <li>
                                <a href="project-list.php"><i class="icon-list"></i><span>Projects</span></a>
                                <!--<a href="#Projects" class="has-arrow"><i class="icon-list"></i><span>Projects</span></a>
                                <ul>
                                    <li><a href="project-add.php">Add Projects</a></li>
                                    <li><a href="project-list.php">Projects List</a></li>
                                    <li><a href="project-grid.php">Projects Grid</a></li>
                                    <li><a href="project-detail.php">Projects Detail</a></li>                                  
                                </ul>-->  
                            </li>
                            <li>
                                <a href="client-list.php"><i class="icon-user"></i><span>Clients</span></a>
                                <!--<a href="#Clients" class="has-arrow"><i class="icon-user"></i><span>Clients</span></a>
                                <ul>
                                    <li><a href="client-add.php">Add Clients</a></li>
                                    <li><a href="client-list.php">Clients List</a></li>
                                    <li><a href="client-detail.php">Clients Detail</a></li>
                                </ul>-->
                            </li>
                            <!--<li><a href="project-team.php"><i class="icon-users"></i>Team</a></li>-->
                            <li><a href="app-taskboard.php"><i class="icon-tag"></i>Taskboard</a></li>
                            <li><a href="app-tickets.php"><i class="icon-screen-tablet"></i>Tickets</a></li>
                        </ul>                        
                    </nav>                    
                </div>           
            </div>          
        </div>
    </div>

    <div id="main-content" class="profilepage_2 blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> User Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ul>
                    </div>            
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="profile-image"> <img src="assets/images/user.png" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0"><strong><?= $_SESSION['S_FirstName']. " ";?></strong><?= $_SESSION['S_LastName']?></h4>
                            </div>                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p><?=$V_Address_Line_1 ." ".$V_Address_Line_2.", ". $V_Zipcode . " ". $V_City?></p>
                            <div>
                                <iframe src="<?=$V_Google_Address;?>" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p><?= $V_Email ;?></p>                            
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p><?= $V_Phone; ?></p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0"><?= $V_BirthDate_string;?></p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="tab-content padding-0">
                        <div class="tab-pane animated fadeIn active" id="Settings">
                            <form method="POST">      
                            <div class="card">
                                <div class="body">
                                    <h6>Basic Information</h6>
                                    <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="FirstName" placeholder="First Name" value="<?= $V_FirstName;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="LastName" placeholder="Last Name" value="<?= $V_LastName;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Email" placeholder="Email" value="<?= $V_Email;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Enterprise_Email" placeholder="Enterprise Email" value="<?= $V_Enterprise_Email;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Phone" placeholder="Phone" value="<?= $V_Phone;?>">
                                                </div>
                                                <hr>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <h6>Address Information</h6>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Address_Line_1" placeholder="Address Line 1" value="<?= $V_Address_Line_1 ;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Address_Line_2" placeholder="Address Line 2" value="<?= $V_Address_Line_2;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="ZipCode" placeholder="ZipCode" value="<?= $V_Zipcode;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="City" placeholder="City" value="<?= $V_City;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Country" placeholder="Country" value="<?= $V_Country;?>">
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <h6>Personal Information</h6>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                        </div>
                                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" name="BirthDate" placeholder="Birthdate" value="<?= $V_BirthDate;?>">
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-life-ring"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="National_Insurance_Number" placeholder="National Insurance Number" value="<?= $V_National_Insurance_Number;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa icon-credit-card"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Account_Number" placeholder="Account Number" value="<?= $V_Account_Number;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-users"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Contact_Person_Name" placeholder="Contact Person Name" value="<?= $V_Contact_Person_Name;?>"> 
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="Contact_Person_Phone" placeholder="Contact Person Phone" value="<?= $V_Contact_Person_Phone;?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-heart"></i></span>
                                                    </div>
                                                    <select name="Marital" id="Marital" class="form-control">
                                                            <?php
                                                             try {
                                                                $UserID = $_SESSION['S_UserID'];
                                                                $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                $query = $conn->prepare("EXEC [Users].[sp_Select_Marital_Status]");
                                                                $query->execute();
                                                                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                                                    $V_Selected = "";
                                                                    if($row["StatusID"] == $V_Marital_Status )
                                                                    {
                                                                        $V_Selected = "selected";
                                                                    }
                                                                    echo '<option value="'.$row["StatusID"].'" '.$V_Selected.'>'.$row["Name"].'</option>';
                                                                }
                                                              } 
                                                              catch(PDOException $e) {
                                                                echo $e->getMessage();
                                                              }
                                                              $conn = null;   
                                                            ?>
                                                        </select>
                                                </div> 
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-female"></i></span>
                                                    </div>
                                                    <select name="Gender" id="Gender" class="form-control">
                                                            <?php
                                                             try {
                                                                $UserID = $_SESSION['S_UserID'];
                                                                $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                $query = $conn->prepare("EXEC [Users].[sp_Select_Gender]");
                                                                $query->execute();
                                                                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                                                    $V_Selected = "";
                                                                    if($row["GenderID"] == $V_Gender_Status )
                                                                    {
                                                                        $V_Selected = "selected";
                                                                    }
                                                                    echo '<option value="'.$row["GenderID"].'" '.$V_Selected.'>'.$row["Name"].'</option>';
                                                                }
                                                              } 
                                                              catch(PDOException $e) {
                                                                echo $e->getMessage();
                                                              }
                                                              $conn = null;   
                                                            ?>
                                                        </select>
                                                </div>  
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="B_Update">Update</button> &nbsp;&nbsp;
                                    <a type="button" href="index.php" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                    
                </div>

            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>

</body>
</html>
<?php
if(isset($_GET['rd'])) {
    if($_GET["rd"] == "200")
    {   
        echo '<script>swal("Good job!", "Your changes have been successfully implemented!", "success");</script>';
    }
}
?>