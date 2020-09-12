<?php
// ke thua lop controller
// tao tung controller cho tung trang, tranh bi loi ca dam
//goi lai file Controller.php
require_once'Controller.php';
require_once'models/IndexModel.php';

class IndexController extends Controller{
    function getHomePage(){
        // co the return nhu nay
        //return parent::loadView('index');

        //HOAC CO THE RETURN NHU SAU

        //--- BƯỚC 1: CẤP PHÁT , KHỞI TẠO, GỌI NÓ ĐỂ THỰC THI
        $model=new IndexModel();
        $listProduct=$model->listProduct();

        //--- BƯỚC 2: TẠO RA 1 MẢNG CHỨA CÁC MẢNG CON ĐỂ THỰC THI CÔNG VIỆC VỀ SAU  ---> THÊM, XÓA ,SỬA, UPDATE...
        $data = [
            'listProducts' => $listProduct
        ];

        //--- BƯỚC 3: RETURN CÁC HÀM CHƯA DATA VÀ THỰC THI KHI CHẠY Ở FILE INDEX.PHP
        return $this->loadView( 'index','Trang chủ',$data); 
         // index co nghia vd nhu la name view,, còn $data là trỏ tới biến này, mà nó là mảng cha chứa các mảng con...
    }
}
?>