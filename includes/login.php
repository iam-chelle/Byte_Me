<?php
if(isset($_POST['Login'])){
include_once "db_conn.php";
include_once "function.inc.php";

$p_username = htmlentities($_POST['usname']);
$p_password = htmlentities($_POST['pword']);

    if(uidExists($conn, $p_username, $p_password) !== false){
        $user_info = uidExists($conn, $p_username, $p_password);
        
        session_start();
        
        switch($user_info['usertype']){
          
            case 'A': $_SESSION['usertype'] = 'A';
                      $_SESSION['userid'] = $user_info['user_id'];
                      header("location: ../admin/admin.php");
                      break;
                
            case 'C': $_SESSION['usertype'] = 'C';
                      $_SESSION['userid'] = $user_info['user_id'];
                      header("location: ../customer.php");
                      break;
        }
    }else{
       header("location: ../signup.php");
       exit();
    }

}