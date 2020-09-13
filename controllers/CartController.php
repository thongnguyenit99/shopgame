<?php
require_once 'Controller.php';
require_once 'middlewares/Cart.php';
require_once 'models/CartModel.php';

//session_start();
class CartController extends Controller
{

    function getCartView(){
    $oldCart=isset($_SESSION['cart'])?$_SESSION['cart']:null;
    $cart=new Cart($oldCart);
    $data=['cart'=>$cart];
    return $this->loadView('shoppingcart','Giỏ hàng',$data);  
   }

    // function add products to the cart
    function addToCart($id){
        $model = new CartModel;
        $product = $model->findProductById($id);
        if (!$product) {
            $r = [
                'error' => 1,
                'data' => null,
                'message' => 'Không tìm được sản phẩm !'
            ];
            echo json_encode($r);
            return false;
        }
        //add to cart
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;
        $cart->add($product, 1);
        $_SESSION['cart'] = $cart;
        $r = [
            'error' => 0,
            'data'=> [
                'cart'=>$cart,
                'product_name'=>$product->name,
                'images' => $product->image,
            ],
            'message' => 'Thêm sản phẩm thành công!'
        ];
        echo json_encode($r);
        return true;
    }
    // function remove products to the cart
    function deleteCart($id){
        if (isset($_SESSION['cart']) && $_SESSION['cart']->totalQty > 0) {
            $oldCart = $_SESSION['cart'];
            //kiem tra id co exist trong cart
            if (array_key_exists($id, $oldCart->items)) {
                $cart = new Cart($oldCart);
                $cart->removeItem($id);
                $_SESSION['cart'] = $cart;
                $r = [
                    'error' => 0,
                    'data' => [
                        'totalPrice' => number_format($cart->totalPrice),
                        'promtPrice' => number_format($cart->promtPrice),
                        'sellOff' => number_format($cart->promtPrice - $cart->totalPrice),
                        'cart' => $cart
                    ],
                    'message' => 'Deleted!'
                ];
                echo json_encode($r);
            } else {
                $r = [
                    'error' => 1,
                    'data' => null,
                    'message' => 'Sản phẩm hiện không có trong shopgame'
                ];
                echo json_encode($r);
            }
        } else {
            $r = [
                'error' => 1,
                'data' => null,
                'message' => 'Không thể xóa được!Bởi vì giỏ hàng đã rỗng.'
            ];
            echo json_encode($r);
        }
}
    // function update products to the cart
    function updateCart($id, $qty){
        $model = new CartModel;
        $product = $model->findProductById($id);
        if(!$product){
            $r = [
                'error'=> 1,
                'data'=> null,
                'message'=>'Không có thể tìm sản phẩm !'
            ];
            echo json_encode($r);
            return false;
        }
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $cart->update($product, $qty);
        $_SESSION['cart'] = $cart;
        $r = [
            'error'=> 0,
            'data'=> [
                'itemUpdate'=>number_format($cart->items[$id]['promotionPrice']),
                'totalPrice'=> number_format($cart->totalPrice),
                'promtPrice'=> number_format($cart->promtPrice),
                'sellOff'=> number_format($cart->promtPrice-$cart->totalPrice),
                'cart'=>$cart
            ],
            'message'=>'Success!'
        ];
        echo json_encode($r);
    }
}


?>