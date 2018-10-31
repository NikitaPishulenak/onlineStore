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

        if(isset($productsInCart)){
            $productIds=array_keys($productsInCart);
            $products=Cart::getProductsByIds($productIds);
            
        }
        $totalPrice=Cart::getTotalPrice();
        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

	public function actionAddProduct($idProduct){
        echo Cart::addProduct($idProduct);
         
		return true;
    }

}
?>