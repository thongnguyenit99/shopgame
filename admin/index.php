<?php
require_once'controllers/AdminController.php';
$data=new AdminController;
return $data->loginAdmin();
?>