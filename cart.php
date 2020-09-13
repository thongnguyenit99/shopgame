<?php
require_once 'controllers/CartController.php';

$c = new CartController;
// insert products
if( isset($_POST['id']) && 
    isset($_POST['action']) && 
    $_POST['action']=='add' 
){
    $id = $_POST['id'];
    return $c->addToCart($id);
}
if(isset($_POST['id']) && isset($_POST['action']) && $_POST['action']=='delete' ){
    //delete cart
    return $c->deleteCart($_POST['id']);
}
if(isset($_POST['id']) && isset($_POST['action']) && $_POST['action']=='update' ){
    //update cart
    return $c->updateCart($_POST['id'], $_POST['qty']);
}

?>