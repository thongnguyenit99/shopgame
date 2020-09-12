<?php
//print_r($_SERVER);
//die;
require_once'controllers/IndexController.php';

$data=new IndexController;
return $data->getHomePage();
?>