<?php
class Connect{
    // Thuộc tính
    var $db=null;
    // Hàm tạo, Thực hiện công việc kết nối với dtb bằng PDO(dsn,user,pass,array...)
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=coffee1408';
        $user='root';
        $pass='';
        // Gọi đến hàm tạo khi tạo 1 đối tượng
        // Dùng try catch thử xem có kết nối được với database ko
        try{
            $this->db=new PDO($dsn,$user,$pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            // echo "Thành công";
        }
        catch(\Throwable $th){
            // echo "Thất bại";
        }
    }
    // Phương thức trả về nhiều đối tượng khi thực thi câu truy vấn 
    // select
    public function getList($select){
        //query thực thi câu select, query thuộc về phương thức của PDO
        $result = $this->db->query($select);
        return $result;
    }

    // Phương thức trả về 1 object
    public function getInstance($select){
        $result = $this->db->query($select);
        $result = $result->fetch(); // một mảng
        return $result;
    }
    public function exec ($query){
        $result = $this->db->exec($query);
        return $result;
    }
}
?>