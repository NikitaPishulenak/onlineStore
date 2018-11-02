<?php

class SiteController
{
	public function actionIndex($page=1){
		$categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6, $page);

        $total = Product::getTotalProductsInCatalog();

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();
       
		require_once(ROOT . '/views/site/index.php');
		return true;
    }
    
    public function actionContact(){
        $name='';
        $phon='';
        $message='';
        $result = false;

        if (isset($_POST['submit'])) {
            $name=$_POST['name'];
            $phon=$_POST['phonNumber'];
            $message=$_POST['userText'];

            $errors = false;

            if (!User::checkFieldEmpty($name)) {
                $errors[] = 'Введите ваше имя!';
            }
            if (!User::checkName($name)) {
                $errors[] = 'Имя не может быть меньше 2 символов!';
            }
            if (!User::checkFieldEmpty($phon)) {
                $errors[] = 'Введите ваш номер телефона!';
            }
            if (!User::checkFieldEmpty($message)) {
                $errors[] = 'Введите ваш вопрос!';
            }
            if($errors==false){
                ECHO"JH";
            }
            

        }

		require_once(ROOT . '/views/site/contact.php');
		return true;
	}

}
?>