<?php
session_start();
if(isset($_SESSION['usertype']) && isset($_SESSION['userid'])){
    switch($_SESSION['usertype']){
        case 'A' : break;
        case 'C' : header("location: customer.php");
                   break;
    }
}
else{
    header("location: index.php");
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Customer Page</title>
</head>
<body>
    <h1>This is an Admin Page</h1>
    <a href="includes/logout.php">Logout</a>
</body>
</html>