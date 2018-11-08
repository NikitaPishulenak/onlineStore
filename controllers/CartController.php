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
            $userName=(isset($_SESSION['user'])) ? $_SESSION['name'] : "";
            $userPhone="";
            $userComment="";

            if (isset($_POST['submit'])) {
                $userName=$_POST['userName'];
                $userPhone=$_POST['userPhone'];
                $userComment=$_POST['userComment'];
    
                $errors = false;
                
                if (!User::checkName($userName)) {
                    $errors[] = 'Имя не должно быть короче 2-х символов';
                }
                
                if (!User::checkPhoneNumber($userPhone)) {
                    $errors[] = 'Неправильный номер телефона';
                }
                
                if ($errors == false) {
                    if(User::isGuest()){
                       $userId=false;
                    }
                    else{
                        $userId=User::checkLogged();
                    }
                    $result=Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                    if($result){
                        Cart::clear();
                        ?><script>
                        alert("Ваш заказ успешно зарегистрирован!");
                        location.href="/phpShop/";
                        </script><?
                    }
                    //$result = User::register($name, $email, $password);
                }
            }
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
        return true;
    }

}
?>