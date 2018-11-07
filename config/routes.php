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
	'phpShop/cart/delete' => 'cart/deleteProduct',
	'phpShop/cart/addAjax/([0-9]+)' => 'cart/addProduct/$1', 
	'phpShop/cart/reduceAjax/([0-9]+)' => 'cart/reduceProduct/$1',//- в корзине
	
	'phpShop/cart' => 'cart/index',

	'phpShop/admin/product/create' => 'adminProduct/create',
    'phpShop/admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'phpShop/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'phpShop/admin/product' => 'adminProduct/index',
	'phpShop/admin' => 'admin/index',
	
	

	'phpShop' => 'site/index', // actionIndex в SiteController
	
);