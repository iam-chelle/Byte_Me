<?php
if(isset($_POST['addcart'])){
$user_id = htmlentities($_POST['user_id']);
$item_id = htmlentities($_POST['item_id']);
$store_id = htmlentities($_POST['store_id']);
$item_qty = htmlentities($_POST['item_qty']);
    
include "db_conn.php";
include "function.inc.php";
    
if(addtocart($conn, $user_id, $item_id,$store_id,$item_qty) !== false){
    header("location: ../cart.php");
}
    
}
