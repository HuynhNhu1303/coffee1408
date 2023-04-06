<?php 
    $act = 'signup';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'signup':
            include './View/signup.php';
            echo  1;
            break;
        case 'dangky_action':
            echo  2;

            // Khi người dùng nhấn nút đăng ký, nó chuyển qua đây là tên, địa chỉ...
            if(isset($_POST['txtten_khachhang'])) {
                $ten_khachhang = $_POST['txtten_khachhang'];
                $diachi = $_POST['txtdiachi'];
                $sodienthoai = $_POST['txtsodienthoai'];

                $username = $_POST['txtusername'];
                $email = $_POST['txtemail'];
                $matkhau = $_POST['txtmatkhau'];
                // mật khẩu người dùng đăng nhập sẽ dùng vào bảng khách hàng
                $crypt=md5($matkhau);
                // trước khi insert kiểm tra xem $username có tồn tại trong database hay chưa
                $ur = new user();
                $check = $ur->InsertUser($ten_khachhang, $username, $crypt, $email, $diachi, $sodienthoai);
                if($check!='false') {
                    echo '<script>alert("Đăng ký thành công")</script>';
                    include "./View/home.php";
                } else {
                    echo '<script>alert("Đăng ký ko thành công")</script>';
                    include './View/registration.php';
                }
            }
            break;
    }
?>