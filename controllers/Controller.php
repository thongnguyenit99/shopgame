<?php
// tên class trung vs file nhen
require_once 'middlewares/Cart.php';
session_start();
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
        // tat ca doan code trrongfile master vao dong duoi nay nef  . dau .. la ra khoi thu muc controller, vi the phai ../views - thu muc chua file nay nef
    if(isset($_SESSION['cart'])){
        $oldCart=$_SESSION['cart'];
        $cart=new Cart($oldCart);
        $totalItemCart=$cart->totalQty;

}
    else $totalItemCart=0;

        //$model=new ProductTypeModel();
        //$categories=$model->getAllCategories();

        // viet truot dong requice
        require_once "views/main.view.php";
    }
    function loadViewAjax($view, $data = [])
    {
        require_once "views/ajax/$view.view.php";
    }
    function Login(){
       return $this->loadView( 'login','Đăng Nhập');
    }
    function Logout(){
       return $this->loadView( 'logout','Đăng Xuất');
    }
}
?>