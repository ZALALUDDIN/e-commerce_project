<?php include('includes/connection.php'); ?>
<?php
    $id=$_GET['id'];
    $qty=$_GET['qty'];
    $totalprice=0;
    $totaldiscount=0;
    $_SESSION['cart']['data'][$id]['qty']=$qty;
    if($qty > 0){
        foreach($_SESSION['cart']['data'] as $arr){
            $totalprice+=$arr['price'] * $arr['qty'];
            $totaldiscount+=$arr['discount'] * $arr['qty'];
        }
        
        $_SESSION['cart']['totalqty']=count($_SESSION['cart']['data']);
        $_SESSION['cart']['totalprice']=$totalprice;
        $_SESSION['cart']['totaldiscount']=$totaldiscount;
    }else{
        unset($_SESSION['cart']['data'][$id]);
    }
    
   echo "Data updated"
?>