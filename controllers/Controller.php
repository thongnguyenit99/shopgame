<?php
// tên class trung vs file nhen

class Controller{
     function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
    /** func này có 3 tham số:
     * 1 là truyền vào file view nó
     * 2 là title
     * 3 là dữ liệu
     */
    function loadView($view = "index",string $title='Home',  $data=[]){
        // gọi lại kế thừa các header và footer từ view main
        require_once"views/main.view.php";
    }
}
?>