<?php

return array(
	'phpShop/product/([\d]+)' => 'product/view/$1', // actionView в ProductController
	
	'phpShop/catalog' => 'catalog/index',
	'phpShop/category/([0-9]+)' => 'catalog/category/$1',
    
 //    'catalog' => 'catalog/index', // actionIndex в CatalogController
 //    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    'phpShop' => 'site/index', // actionIndex в SiteController

);