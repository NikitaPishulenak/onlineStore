<?php

class CartController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $productsInCart=false;

        $productsInCart=Cart::getCart();
        $totalCauntProductInCart=Cart::totalProductInCart();

        if(!empty($productsInCart)){
            $productIds=array_keys($productsInCart);
            $products=Cart::getProductsByIds($productIds);
            //print_r($productsInCart);
            $totalPrice=Cart::getTotalPrice();
        }
        
        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

	public function actionAddProduct($idProduct){
        echo Cart::addProduct($idProduct);
		return true;
    }

    public function actionReduceProduct($idProduct){
        echo Cart::reduceProduct($idProduct);
		return true;
    }

    public function actionDeleteProduct($idProduct){
        Cart::deleteProduct($idProduct);
    }

}
?>