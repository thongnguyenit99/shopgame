<?php
require_once 'controllers/CartController.php';

$data=new CartController;
return $data->getCartView();

?>