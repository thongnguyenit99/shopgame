<?php
// ke thua lop controller

// tao tung controller cho tung trang, tranh bi loi ca dam

//goi lai file Controller.php
require_once 'Controller.php';
require_once 'models/ProductModel.php';
// kế thừa từ lớp 
class ProductController extends Controller
{
    function loadProduct()
    {
        // kieemr tra neu load view ok 
        if (isset($_GET['url']) && $_GET['id']) {
            $url = $_GET['url']; 
            $id = $_GET['id']; 
            $model = new ProductModel;
            $product = $model->getProductDetail($url, $id); // chi tiêt san pham

            if ($product) {
                //load view ok thi 
                $title = $product->name;

                $data = [
                    'product' => $product,
                ];
                return $this->loadView('product', $title, $data);
            } else {
                header('Location: error.php');
            }
        } else {
            // loi thi tro ve trang bao loi 
            header('Location: error.php');
        }
    }
}