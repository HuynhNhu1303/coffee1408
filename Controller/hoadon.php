<?php
if (isset($_SESSION['id_khachhang'])) {
    $hd= new hoadon();
    $sohd=$hd->InsertOrder($_SESSION['id_khachhang']);
    //có được mã số hóa đơn thì tiến hành insert vào chi tiết hóa đơn
    $_SESSION['id_hoadon']=$sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key =>$item){
        $hd->inserOrderDetail($sohd,$item['id_sanpham'],$item['soluong'],$item['total']);
        $total+=$item['total'];
    }
    //Viết phương thức update tổng tiền vào lại bảng hóa đơn
    $hd->updateOrderTotal($sohd,$total);
    include "View/hoadon.php";
}
else{
    echo '<script> alert("Vui lòng đăng nhập hoặc đăng ký nếu chưa có tài khoản!");</script>';
    include "./View/login.php";
}
?>