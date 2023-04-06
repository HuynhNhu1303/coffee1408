<?php 
    class user {
        // hàm tạo 
        function __construct(){}
        // phương thức insert vào bảng khách hàng
        // select là query thực thi 
        // insert, update, delete,... là exec thực thi
        // phương thức thêm
        function InsertUser($ten_khachhang, $username, $matkhau, $email, $diachi, $sodienthoai) {
            $db = new connect();
            $query = "insert into list_khachhang(id_khachhang, ten_khachhang, username, matkhau, email, diachi, sodienthoai, vaitro)
            values(NULL, '$ten_khachhang', '$username', '$matkhau', '$email', '$diachi', '$sodienthoai', default)";
            $db->exec($query);
        }
        
        // phương thức login
        function login($username, $matkhau) {
            $db= new connect();
            $select = "select * from list_khachhang where username='$username' and matkhau='$matkhau'";
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set; 
        }
    }
?>