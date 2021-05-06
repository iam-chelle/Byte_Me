<?php
include_once "includes/db_conn.php";
session_start();
if(isset($_GET['checkout'])){
$err = NULL;
$res = NULL;
    $order_num = random_int(10000,99999) . uniqid();
    
    $sql1 = "UPDATE `cart`
                SET order_number = ? 
                  , status = 'C'
              WHERE user_id = ?
                AND status = 'P'
                AND cart_status = 'C'
                AND checkout_status = 'X';
                ";
    
    $stmt=mysqli_stmt_init($conn);
    //check if statement is valid
     if (!mysqli_stmt_prepare($stmt, $sql1)){
        $err = "Statement Failed";
     }
        mysqli_stmt_bind_param($stmt, "ss" ,$order_num , $_SESSION['userid']);
        mysqli_stmt_execute($stmt);
        $res = "Order Number Updated";
    
    $sql2 = "INSERT INTO `orders`
           (`order_number`,`cust_id`,`total_qty`,`total_amount`,`status`)
              SELECT c.order_number
                   , c.user_id 
                   , sum(c.qty)
                   , sum(c.qty * i.item_price)
                   , c.cart_status
                FROM `cart` c
                JOIN `items` i
                  ON (c.item_id = i.item_id)
                WHERE c.user_id = ?
                  AND c.cart_status = 'C'
                  AND c.status = 'C'
                  AND c.checkout_status != 'I'
               group by c.order_number
                   , c.user_id 
                   , c.cart_status;";
    
    $stmt=mysqli_stmt_init($conn);
    //check if statement is valid
     if (!mysqli_stmt_prepare($stmt, $sql2)){
        $err = "Statement Failed";
     }
        mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
        mysqli_stmt_execute($stmt);
        $res = "Orders inserted";
    
    $sql3 = "UPDATE `cart`
                SET checkout_status = 'I'
              WHERE user_id = ?
                AND status = 'C'
                AND order_number = ?
                AND cart_status = 'C'
                AND checkout_status != 'I';
                ";
    
    $stmt3=mysqli_stmt_init($conn);
    //check if statement is valid
     if (!mysqli_stmt_prepare($stmt3, $sql3)){
        $err = "Statement Failed";
     }
        mysqli_stmt_bind_param($stmt3, "ss" , $_SESSION['userid'], $order_num);
        mysqli_stmt_execute($stmt3);

}
?>
<table>
    <thead>
        <th>Order Number</th>
        <th>Total Qty</th>
        <th>Total Amount</th>
        <th>Date Ordered</th>
        <th>Status</th>
    </thead>
    
    <?php
     $get_orders = "SELECT * FROM `orders` WHERE cust_id = ? ;";
    $stmt=mysqli_stmt_init($conn);
    //check if statement is valid
     if (!mysqli_stmt_prepare($stmt, $get_orders)){
        $err = "Statement Failed";
        echo $err;
     }
        mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
        if(!empty($resultData)){
            while($row = mysqli_fetch_assoc($resultData)){ ?>
                    <tr>
                       
                        <td> <a href="#" class=""><?php echo $row['order_number'];?></a>   </td>
                        <td><?php echo $row['total_qty'];?></td>
                        <td><?php echo $row['total_amount'];?></td>
                        <td><?php echo $row['order_date'];?></td>
                        <td><?php echo $row['status'] = 'C' ? 'Pending for Delivery' : 'Delivered' ;?></td>                        
                    </tr>
                    <tr>
                        <td colspan="5">
                               <ul>
                                <?php
                                     $get_cart = "SELECT i.item_name
                                                       , s.store_name
                                                       , s.store_owner
                                                       , s.sell_contact
                                                       , s.sell_email
                                                       , c.qty
                                                       , i.item_price
                                                       , c.qty * i.item_price sub_total
                                                    FROM `cart` c
                                                    JOIN `items` i
                                                      ON (c.item_id = i.item_id)
                                                    JOIN `store` s
                                                      ON (c.store_id = s.store_id)
                                                   WHERE c.order_number = ? 
                                                     AND c.user_id = ? 
                                                     AND c.status = 'C'
                                                     AND c.cart_status = 'C';";
                                    $c_stmt=mysqli_stmt_init($conn);
                                    //check if statement is valid
                                     if (!mysqli_stmt_prepare($c_stmt, $get_cart)){
                                        $err = "Statement Failed";
                                        echo $err;
                                     }
                                        mysqli_stmt_bind_param($c_stmt, "ss" ,$row['order_number'],$_SESSION['userid']);
                                        mysqli_stmt_execute($c_stmt);
                                        $cart = null;               
                                        $cartdata = mysqli_stmt_get_result($c_stmt);
                                        if(!empty($cartdata)){
                                            while($cart = mysqli_fetch_assoc($cartdata)){ ?>
                                               <li><?php echo $cart['item_name'] . " - " . $cart['store_name'] . "(".$cart['store_owner']."[".$cart['sell_contact']."]".")". " : Php" . $cart['sub_total'] ;?></li>
                                            <?php }
                                        }
                                                          
                                ?>
                             </ul>
                        </td>
                    </tr>                    
            <?php }
        }
        else{ ?>
            <tr>
                <td colspan="5">No Orders Found</td>
            </tr>
        <?php }
    ?>
    
    
</table>
