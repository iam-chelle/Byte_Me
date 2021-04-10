<?php
session_start();
echo $_SESSION['usertype'];
if(isset($_SESSION['usertype']) && isset($_SESSION['userid'])){
    switch($_SESSION['usertype']){
        case 'A' : header("location: admin_page.php");
                   break;
        case 'C' : break;
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
    <h1>This is a Customer Page</h1>
    <a href="includes/logout.php">Logout</a>
</body>
</html>