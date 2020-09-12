<?php
require_once'controllers/ErrorController.php';
$data=new ErrorController;
return $data->ErrorMessage();
?>