<?php
    class hoadon{
        public function __construct(){}
        function InsertOrder($id_khachhang)
        {
            $db= new connect();
            $date = new Datetime("now");
            $datecreate = $date->format("Y-m-d");
            $query="insert into hoadon1(id_hoadon,id_khachhang,ngaydat,tongtien)
            values(NULL,$id_khachhang,'$datecreate',0)";
            $db->exec($query);
            // $select = "select id_hoadon from hoadon1 order by id_hoadon desc limit1";
            // $id_hoadon = $db->getInstance($select);
            // return $id_hoadon;
            $int=$db->getInstance("select id_hoadon from hoadon1 order by id_hoadon desc limit 1");
            return $int[0];
        }
        function inserOrderDetail($id_hoadon,$id_sanpham,$soluongmua,$thanhtien)
        {
            $db=new connect();
            $query= "insert into chitiet_hoadon1(id_hoadon,id_sanpham,soluongmua,thanhtien,tinhtrang)
            values($id_hoadon,$id_sanpham,$soluongmua,$thanhtien,0)";
            $db->exec($query);
        }
        function updateOrderTotal($sohd,$tongtien)
        {
            $db = new connect();
            $query ="update hoadon1 set tongtien=$tongtien where id_hoadon=$sohd";
            $db->exec($query);
        }
        function getOrder($sohdid)
        {
            $db = new connect();
            $select=" select b.id_hoadon,a.ten_khachhang,a.diachi,a.sodienthoai,b.ngaydat from list_khachhang a 
            INNER join hoadon1 b on a.id_khachhang=b.id_khachhang where b.id_hoadon=$sohdid";
            $result = $db ->getInstance($select);
            return $result;
        }
        function getOrderDetail($sohdid)
        {
            $db = new connect();
            $select=" select a.tensp,a.dongia , b.soluongmua, b.thanhtien from product a
            INNER join chitiet_hoadon1 b on a.id_sanpham=b.id_sanpham where id_hoadon=$sohdid"; 
            $result = $db ->getList($select);
            return $result;
        }
    }
?>