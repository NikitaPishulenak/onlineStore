<?php

class Cart
{

    public static function addProduct($id)
    {
        $id=intval($id);
        $productsInCart=array();
        if(isset($_SESSION['product'])){
            $productsInCart=$_SESSION['product'];
        }
        if(array_key_exists($id, $productsInCart)){
            $productsInCart[$id]++;
        }
        else{
            $productsInCart[$id]=1;
        }
        $_SESSION['product']=$productsInCart;
        return self::totalProductInCart();
    }

    public static function reduceProduct($id)
    {
        $id=intval($id);
        $productsInCart=array();
        if(isset($_SESSION['product'])){
            $productsInCart=$_SESSION['product'];
        }
        if((array_key_exists($id, $productsInCart)) && ($productsInCart[$id]>0)){
            $productsInCart[$id]--;
        }
        else{
            $productsInCart[$id]=1;
        }
        $_SESSION['product']=$productsInCart;
        return self::totalProductInCart();
    }

    public static function totalProductInCart()
    {
        $count=0;
        if(isset($_SESSION['product'])){
            
            foreach($_SESSION['product'] as $id => $quantity){
                $count+=$quantity;
            }
        }
        return $count;
    }

    public static function getCart()
    {
        if(isset($_SESSION['product']))
        {
            return $_SESSION['product'];
        }
        return false;
    }

    public static function getProductsByIds($productIds)
    {
        $products=array();
        $stringIds=implode(",", $productIds);
        
        $db = Db::getConnection();
        
        $result = $db->query("SELECT id, code, price, name FROM product WHERE status='1' and id IN (".$stringIds.")");

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $products[$i]=$row;
             $i++;
         }
         return $products;
    }

    public static function getTotalPrice()
    {
        
    }
    
}