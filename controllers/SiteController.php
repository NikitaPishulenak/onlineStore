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

        $recomendedProducts = array();
        $recomendedProducts=Product::getRecommendedProducts();

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
            $phon=$_POST['phone'];
            $message=$_POST['userText'];

            $errors = false;

        }

		require_once(ROOT . '/views/site/contact.php');
		return true;
	}

}
?>