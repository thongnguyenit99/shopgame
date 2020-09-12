<?php
require_once'controllers/ProductController.php';

$data=new ProductController;
return $data->loadProduct();
?>