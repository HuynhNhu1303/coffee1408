<?php
class product{
    // thuộc tính
    // hàm tạo 
    public function __construct(){}
    // thực hiện lấy sản phẩm Nicaragua về để đổ lên view (id_loai=1)
    public function getNicaragua()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_loai=1 LIMIT 4;";
        $result = $db -> getList($select);
        return $result; 
    }

    // thực hiện lấy sản phẩm Ethiopia về để đổ lên view (id_loai=2)
    public function getEthiopia()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_loai=2 LIMIT 4;";
        $result = $db -> getList($select);
        return $result; 
    }

    // thực hiện lấy sản phẩm Columbia về để đổ lên view (id_loai=2)
    public function getColumpia()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_loai=3 LIMIT 4;";
        $result = $db -> getList($select);
        return $result; 
    }

    public function getAllNicaragua()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_loai=1";
        $result = $db -> getList($select);
        return $result; 
    }

    public function getAllEthiopia()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_loai=2";
        $result = $db -> getList($select);
        return $result; 
    }
    public function getAllColumbia()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_loai=3";
        $result = $db -> getList($select);
        return $result; 
    }

    public function getSanphammoi()
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "select *  from product ORDER by id_sanpham desc LIMIT 7";
        $result = $db -> getList($select);
        return $result; 
    }

    public function getIDsanpham($id)
    {
        // B1:  kết nối được với database
        $db = new Connect();
        // B2: Dùng select để truy vấn
        $select = "SELECT * FROM `product` WHERE id_sanpham=$id";
        $result = $db -> getInstance($select);
        return $result; 
    }

    public function getProductID($id)
            {
                $db=new connect();
                $select= "select * from product where id_sanpham=$id";
                $result=$db->getInstance($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
    // public function getHangHoaNhom($nhom)
    //         {
    //             $db=new connect();
    //             $select= "select image from product where Nhom=$nhom";
    //             $result=$db->getList($select);
    //             return $result;
    //         }
    public function getGroupNetweight($nhom)
    {
        $db=new connect();
        $select= "select DISTINCT size FROM product where nhom=$nhom order by size ASC";
        $result=$db->getList($select);
        return $result;
    }

    function getTimKiem($timkiem) {
        //b1: kết nối với database
        $db =  new connect();
        //b2:select
        $select = "select * from product WHERE tensp like '%$timkiem%'";
        $result =$db->getList($select);
        return $result;
    }

    // phan trang
    function getHangHoaAllPage($start ,$limit) {
        //b1: kết nối với database
        $db =  new connect();
        $select = "select * from product limit $start, $limit";
        $result =$db->getList($select);
        return $result;
    }
    function getHangHoaAll(){
        //b1: kết nối với database
        $db =  new connect();
        $select = "select *  from product";
        $result =$db ->getList($select);
        return $result;
    }

}
?>