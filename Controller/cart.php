<?php 
    // if(!isset($_SESSION['cart'])) {
    //     $_SESSION['cart'] = array();
    // }
    $act="cart";
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'cart':
            // Khi người dùng nhấn nút mua ngay thì chuyển qua đây gồm có
            // if(isset($_POST['id_sanpham'])) {
            //     $id_sanpham = $_POST['id_sanpham'];
            //     $soluong = $_POST['soluong'];
            //     $size = $_POST['size'];
            //     // Controll yêu cầu model add toàn bộ thông tin vào trong giở hàng 
            //     $gh=new cart();
            //     $gh->add_items($id_sanpham, $soluong, $size);

            if(!isset($_SESSION['cart']))
            {
                $_SESSION['cart'] = array();
            }
            if(isset($_POST['id_sanpham'])) {
                $id_sanpham = $_POST['id_sanpham'];
                $soluong = $_POST['soluong'];
                // $size = $_POST['size'];
                // Controll yêu cầu model add toàn bộ thông tin vào trong giở hàng 
                $gh=new cart();
                $gh->add_items($id_sanpham, $soluong);
            }
            include "./View/cart.php";
            break;
            
        case 'delete_item':
            // if(isset($_GET['id'])) {
                // $key = $_GET['id'];
                // $gh=new cart();
                // $gh->delete_items($key);
            // }
             $key = $_GET['id'];
             unset ($_SESSION['cart'][$key]);
            include "./View/cart.php";
            break;
        case 'update_item':
            // gửi toàn bộ
            if(isset($_POST['newqty'])) {
                $new_list=$_POST['newqty'];
                foreach($new_list as $key=>$qty) {
                    if($_SESSION['cart'][$key]['soluong'] != $qty) {
                        // nếu số lượng trong cart mà khác với số lượng new_list
                        $gh=new cart();
                        $gh->update_items($key, $qty);
                    }
                }
            }
            include "./View/cart.php";
            break;
    }
?>