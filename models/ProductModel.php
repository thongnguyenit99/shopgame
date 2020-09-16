<?php
// gọi  lại file 

require_once'DBConnect.php';

// tạo 1 class
class productModel extends DBConnect{

// Hàm lấy sản phẩm chi tiết

    function getProductDetail($url, $id)
    {
    //  $sql = "SELECT p.*
    //            FROM products INNER JOIN page_url u
    //            ON p.id_url = u.id
    //            WHERE u.url = '$url'
    //            AND p.id =  $id";
    //      return $this->getOneRow($sql);

        // cach thu 2

        $sql = "SELECT p.*
                FROM products p
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE u.url = ?
                AND p.id = ?";
        return $this->getOneRow($sql, [$url, $id]);
}
function checkUser($username){
          $sql = "SELECT *
                FROM user 
                WHERE username = $username";
        return $this->getOneRow($sql, [$username]); 
}

}


?>