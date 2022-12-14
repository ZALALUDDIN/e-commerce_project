<?php include('includes/connection.php'); ?>
<?php
	$link=$_SERVER['HTTP_REFERER'];
    $id=$_GET['id'];
    $where['id']=$id;
    $result=$mysqli->common_select_single('product','*',$where)['selectdata'];
    if(isset($_SESSION['cart']['data'][$id])){
        $_SESSION['cart']['data'][$id]['qty']=$_SESSION['cart']['data'][$id]['qty'] +1;
    }else{
        $_SESSION['cart']['data'][$id]=array(
                                    'cid'=>$id,
                                    'qty'=>1,
                                    'price'=>$result->price,
                                    'discount'=>$result->discount,
                                    'name'=>$result->name,
                                    'image'=>$result->thumb
                                );
    }
    
    $_SESSION['cart']['totalqty']=count($_SESSION['cart']['data']);
    $totalprice=0;
    $totaldiscount=0;
    foreach($_SESSION['cart']['data'] as $arr){
        $totalprice+=$arr['price'] * $arr['qty'];
        $totaldiscount+=$arr['discount'] * $arr['qty'];
    }
    $_SESSION['cart']['totalprice']=$totalprice;
    $_SESSION['cart']['totaldiscount']=$totaldiscount;
    $_SESSION['cart']['coupon_discount']=0;
    $_SESSION['cart']['coupon_code']="";
    header('location:'.$link);
?>