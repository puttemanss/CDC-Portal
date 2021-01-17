<?php
session_start();
if (!isset($_SESSION['S_Session_Active'])) {
    header('location: page-login.php');
}
else if ($_SESSION['S_Active'] == 0) {
    header('location: page-login.php?rd=2000');
}

include_once('settings/db.php');
$Acc_UserID = $_SESSION['S_UserID'];

try {
    $conn = new PDO("sqlsrv:Server=$servername;database=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare("SELECT * FROM [Users].[User] WHERE UserID = $Acc_UserID");
    $query->execute();

    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
        $Acc_Active = $result['Active'];
        $Acc_RoleID = $result['RoleID'];
        $_SESSION['S_User_Role'] = $Acc_RoleID;

        if($Acc_Active == 3){
            header('location: page-login.php?rd=1300');
        }
        else{
            
        }
    }
    
  } 
  catch(PDOException $e) {
    echo $e->getMessage();
  }
  $conn = null;
?>