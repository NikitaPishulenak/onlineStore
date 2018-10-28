<?php

class CatalogController
{
	public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();
        // echo "<br>";
        // print_r($categories);

        $CatalogProducts = array();
        $CatalogProducts = Product::getCatalogProducts();
        // echo "<br>";
        // print_r($CatalogProducts);


		require_once(ROOT . '/views/catalog/catalog.php');
		return true;
    }
    
    

    public function actionCategory($categoryId, $page=1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

}
?>