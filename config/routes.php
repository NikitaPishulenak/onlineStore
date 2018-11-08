<?php

return array(
	'phpShop/product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
	'phpShop/catalog' => 'catalog/index',
	'phpShop/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
	'phpShop/category/([0-9]+)' => 'catalog/category/$1',
	'phpShop/page-([0-9]+)' => 'site/index/$1',
	'phpShop/contacts' => 'site/contact',
	'phpShop/login' => 'user/login',
	'phpShop/logout' => 'user/logout', //вход пользователя
	'phpShop/register' => 'user/register', //регистрация пользователя
	'phpShop/cabinet/editPassword' => 'cabinet/editPassword',
	'phpShop/cabinet' => 'cabinet/index',

	'phpShop/cart/delete/([0-9]+)' => 'cart/deleteProduct/$1',
	'phpShop/cart/addAjax/([0-9]+)' => 'cart/addProduct/$1', 
	'phpShop/cart/reduceAjax/([0-9]+)' => 'cart/reduceProduct/$1',//- в корзине
	'phpShop/cart' => 'cart/index',

	'phpShop/admin/product/create' => 'adminProduct/create',
    'phpShop/admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'phpShop/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'phpShop/admin/product' => 'adminProduct/index',

	// Управление категориями:    
    'phpShop/admin/category/create' => 'adminCategory/create',
    'phpShop/admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'phpShop/admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
	'phpShop/admin/category' => 'adminCategory/index',
	
	'phpShop/admin' => 'admin/index',
	
	

	'phpShop' => 'site/index', // actionIndex в SiteController
	
);