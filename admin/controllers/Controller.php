<?php
class Controller{
     function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
    function loadView($view = "admin",string $title='Trang Admin',  $data=[]){
        // gọi lại kế thừa các header và footer từ view main
        require_once"views/mainAdmin.view.php";
    }
    
}
?>