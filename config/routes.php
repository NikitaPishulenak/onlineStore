<?php

return array(
	'phpShop/product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
	'phpShop/catalog' => 'catalog/index',
	'phpShop/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
	'phpShop/category/([0-9]+)' => 'catalog/category/$1',
	'phpShop/page-([0-9]+)' => 'site/index/$1',
	'phpShop/register' => 'user/register', //регистрация пользователя

    'phpShop' => 'site/index', // actionIndex в SiteController

);