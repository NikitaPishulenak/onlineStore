<?php

class ProductController
{
	public function actionView($id){
		echo "<br>".$id;
		// $categories = array();
  //       $categories = Category::getCategoriesList();

  //       $latestProducts = array();
  //       $latestProducts = Product::getLatestProducts(6);

		// require_once(ROOT . '/views/site/index.php');
		return true;
	}

}
?>