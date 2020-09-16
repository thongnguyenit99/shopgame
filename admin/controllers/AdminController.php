<?php

require 'Controller.php';
require_once 'models/ProductModel.php';


class AdminController extends Controller{
    function loginAdmin (){
        return parent::loadView('admin','Trang Admin');
    }
    function addProduct (){
       return $this->loadView( 'addProduct','Thêm sản phẩm');
    }
     function addProductByCSV (){
         $model=new ProductModel();
         if (isset($_POST["create"])){
         $fileName = $_FILES["txtFile"]["tmp_name"];
         if ($_FILES["txtFile"]["size"] > 0) {
                $file = fopen($fileName, "r");

        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

           //var_dump($column);
            $url = "";
            if (isset($column[0])) {
                $url = $column[0];
            }
            $name = "";
            if (isset($column[1])) {
                 $name = $column[1];;
            }
            $detail = "";
            if (isset($column[2])) {
                $detail = $column[2];
            }
            $price = "";
            if (isset($column[3])) {
               $price = $column[3];;
            }
            $promotion_price = "";
            if (isset($column[4])) {
               $promotion_price = $column[4];
            }
             $img = "";
            if (isset($column[5])) {
               $img = $column[5];
            } 
            $manu = "";
            if (isset($column[6])) {
               $manu = $column[6];
            }
            $deleted = "";
            if (isset($column[7])) {
               $deleted = $column[7];
            }
            $add=$model->insert($url, $name, $detail,$price,$promotion_price, $img, $manu , $deleted);

            var_dump($add);

            if (! empty($add)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
 }
   }
      return $this->loadView( 'addgame','Thêm sản phẩm từ file CSV');

 }
 
}
?>