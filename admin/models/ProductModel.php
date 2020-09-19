<?php
// gọi  lại file 

require_once'../models/DBConnect.php';
class ProductModel extends DBConnect{

// hàm thêm sản phẩm import
    function insert($id_url,$name,$detail,$price,$promotion_price,$image,$Manufacturer,$quantity,$deleted){
       $model= new  DBConnect();
       $conn=$model->__construct();
       $this->stmt = $this->connect->prepare("INSERT INTO products(id_url,name,detail,price,promotion_price,image,Manufacturer,quantity,deleted)
        values (?,?,?,?,?,?,?,?,?)");
        $add= $this->stmt->execute([
            $id_url,
            $name,
            $detail,
            $price,
            $promotion_price,
            $image,
            $Manufacturer,
            $quantity,
            $deleted]);
        return true;
    }


}


?>