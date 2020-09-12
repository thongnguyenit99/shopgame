<?php
require_once'DBConnect.php';
class IndexModel extends DBConnect{


    // HÀM SHOW LIST SẢN PHẨM
    function listProduct()
    {
        // SD PHÉP KẾT BẰNG giữa bảng Products và pages_url
        $sql = "SELECT p.*, u.url AS url
                FROM products p INNER JOIN page_url u  ON p.id_url = u.id
                WHERE deleted=0";
    // có 2 cách return nè .
   // return parent::getMoreRow($sql);
   // hoặc sử dụngreturn này
        return $this->getMoreRow($sql);
    }
}