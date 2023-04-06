<?php 
    $act ='login';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'login':
            include './View/login.php';
            break;
        case 'dangnhap_action':
            // gửi user và pass qua
            if(isset($_POST['txtusername']) && $_POST['txtmatkhau']) {
                $username = $_POST['txtusername'];
                $matkhau =md5($_POST['txtmatkhau']);
                // controler yêu cầu model kiểm tra user và pass
                $ur = new user();
                $test =$ur->login($username, $matkhau);
          
                if($test!=false) {
                    $_SESSION['id_khachhang'] = $test['id_khachhang'];
                    $_SESSION['ten_khachhang'] = $test['ten_khachhang'];
                    $_SESSION['username'] = $test['username'];
                    
                     echo '<script>alert("Đăng nhập thành công")</script>';
                     echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                } else {
                    echo '<script>alert("Đăng nhập ko thành công")</script>';
                    include './View/home.php';
                }
            }
            break;
            case 'logout':
                if(isset($_SESSION['id_khachhang'])) {
                    unset($_SESSION['id_khachhang']);
                    unset($_SESSION['ten_khachhang']);
                    unset($_SESSION['username']);
                    unset($_SESSION['cart']);
                }
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                break;
    }
?>