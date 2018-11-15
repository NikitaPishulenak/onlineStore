<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ФАРБА SHOPPER</title>
        <link href="/phpShop/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/phpShop/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/phpShop/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/phpShop/template/css/price-range.css" rel="stylesheet">
        <link href="/phpShop/template/css/animate.css" rel="stylesheet">
        <link href="/phpShop/template/css/main.css" rel="stylesheet">
        <link href="/phpShop/template/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/phpShop/template/images/ico/favicon.ico">
<!--         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="template/images/ico/apple-touch-icon-57-precomposed.png"> -->
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="fixedHead">
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-xs-8">
                                <div class="logo pull-left">
                                    <a href="/phpShop"><img src="/phpShop/template/images/home/logo.png" alt="LOGO" /></a>
                                </div>
                            </div>
                            <div class="col-sm-9 ">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li class="link-hover-solid"><a href="/phpShop">Главная</a></li>
                                        <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu" class="link-hover-solid">
                                                <li class="link-hover-solid"><a href="/phpShop/catalog/">Каталог товаров</a></li>
                                                <li class="link-hover-solid"><a href="/phpShop/cart/">Корзина</a></li> 
                                            </ul>
                                        </li>
                                        <li class="link-hover-solid"><a href="/phpShop/blog/">Блог</a></li> 
                                        <li class="link-hover-solid"><a href="/phpShop/about/">О магазине</a></li>
                                        <li class="link-hover-solid"><a href="/phpShop/contacts/">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="index-shadow"></div>
            </div>
            
           
            <div class="relativeHead">
                <div class="header-middle">

                    <div class="container-fluid">
                        <div class="headContact">
                            <ul class="tm-contact">
                                <li><img src="/phpShop/template/images/home/mts.png" alt="МТС"><span>+375(29)</span> 567-61-37</li>
                                <li><img src="/phpShop/template/images/home/velcom.png" alt="Velcon"><span>+375(29)</span> 658-76-78</li>
                            </ul>
                        </div>
                        <div class="row"><br><br>
                            <div class="col-sm-12 ">
                                <div class="search ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="textSearch" placeholder="Поиск...">
                                    </div>
                                    <div class="btn btn-default" id="search">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 ">
                                <div class="shop-menu pull-left">
                                    <ul class="nav navbar-nav">                                    
                                        <li><a href="/phpShop/cart"  class="headIcon"><i class="fa fa-shopping-cart headIcon"></i> Корзина</a><i id="cart-count"><?php echo Cart::totalProductInCart(); ?></i></li>
                                        
                                        <?php if(!User::isGuest()): ?>
                                            <li class="dropdown"><a href="/phpShop/cabinet" class="headIcon"><i class="fa fa-user headIcon"></i> Аккаунт</a>
                                                <ul role="menu" class="sub-menu">
                                                    <li><a href="/phpShop/logout" class="headIcon"><i class="fa fa-unlock headIcon"></i> Выход</a></li> 
                                                </ul>
                                            </li>
                                        <?php else: ?>
                                            <li class="dropdown"><a href="/phpShop/login" class="headIcon"><i class="fa fa-lock headIcon"></i> Вход</a>
                                                <ul role="menu" class="sub-menu">
                                                    <li><a href="/phpShop/register" class="headIcon"><i class="fa fa-archive headIcon"></i> Регистрация</a></li> 
                                                </ul>
                                            </li> 
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            

                        </div>
                    
                    </div>
                </div>

            </div>

            
        </header>