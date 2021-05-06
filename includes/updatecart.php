<?php
session_start();
$USER = $_SESSION['userid'];
if(isset($_POST['cart_id'])){
        include "db_conn.php";
        $id = htmlentities($_POST['cart_id']);
        $new_qty = htmlentities($_POST['item_qty']);
         $sql_upd = "UPDATE `cart`
                        SET qty = ?,
                        cart_status = ?
                    WHERE id = ?
                      AND user_id = ?;";
        $stmt_upd = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt_upd, $sql_upd)){
        header("location: ../index.php?error=8"); //update failed
        exit();
        }
        mysqli_stmt_bind_param($stmt_upd,"ssss",$new_qty,$_POST['cart_status'],$id,$USER);
        mysqli_stmt_execute($stmt_upd);
        header("location: ../cart.php?success_update=1");
        
    }