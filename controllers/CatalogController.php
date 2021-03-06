<?php

class CatalogController
{
	public function actionIndex($page=1){
        $categories = array();
        $categories = Category::getCategoriesList();

        $CatalogProducts = array();
        $CatalogProducts = Product::getCatalogProducts($page);

        $total = Product::getTotalProductsInCatalog();

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT . '/views/catalog/catalog.php');
		return true;
    }
    
    

    public function actionCategory($categoryId, $page=1)
    {
        // $categories = array();
        // $categories = Category::getCategoriesList();

        $catFields = array();
        $catFields = Category::getCatFields($categoryId);
        $fields = array();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

    public function actionCategoryFilter($categoryId)
    {

        $catFields = array();
        $catFields = Category::getCatFields($categoryId);
        $fields = array();
        print_r($_POST);

        // $categoryProducts = array();
        // $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        // $total = Product::getTotalProductsInCategory($categoryId);

        // // Создаем объект Pagination - постраничная навигация
        // $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        // require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

}
?>