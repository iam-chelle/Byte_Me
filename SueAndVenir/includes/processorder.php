 <?php
    if(isset($_POST['item_id'])){
        include "db_conn.php";
      	session_start();
        $cust_id= htmlentities($_POST['cust_id']);
        $order_number = htmlentities($_POST['order_number']);
        $store_id = htmlentities($_POST['store_id']);
        $item_id = htmlentities($_POST['item_id']);
        $qty = htmlentities($_POST['qty']);
        $item_stat='P';
        
         $sql_ins = "INSERT INTO `orders`
                 (`order_number`, `cust_id`, `store_id`, `item_id`, `qty`)
                   VALUES (?,?,?,?,?);";
        $stmt_ins = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt_ins, $sql_ins)){
        header("location: index.php?error=7"); //insert failed
        exit();
        }
        mysqli_stmt_bind_param($stmt_ins,"sssss",$order_number,$cust_id,$store_id,$item_id,$qty);
        mysqli_stmt_execute($stmt_ins);
        echo "done with order";
        
    }
    ?>