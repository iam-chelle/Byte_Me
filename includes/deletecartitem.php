<?php
if(isset($_GET['cartid'])){
        include "db_conn.php";
        $id = htmlentities($_GET['cartid']);
         $sql_del = "DELETE FROM `cart` WHERE id = ? ; ";
        $stmt_del = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt_del, $sql_del)){
            header("location: ../index.php?error=9"); //delete failed
            exit();
            }
        mysqli_stmt_bind_param($stmt_del,"s",$id);
        mysqli_stmt_execute($stmt_del);
        header("location: ../cart.php?success_delete");
        
    }