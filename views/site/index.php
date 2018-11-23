<?php include ROOT . '/views/layouts/header.php'; ?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                         <li class="link-hover-solid">
                                            <a href="/phpShop/category/<?php echo $categoryItem['id'];?>">
                                                <?php echo $categoryItem['name'];?>
                                            </a>
                                         </li> 
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div id="testCarousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="item active">
                            <a href="/phpShop/catalog"><img src="/phpShop/template/images/home/banner1.jpg"></a>
                            
                        </div>
                        <div class="item">
                            <a href="/phpShop/catalog"><img src="/phpShop/template/images/home/banner2.jpg"></a>
                        </div>
                        <div class="item">
                            <a href="/phpShop/catalog"><img src="/phpShop/template/images/home/banner3.png"></a>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>

                    <a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="flack">
					<div class="advtImg">
                        <img src="/phpShop/template/images/home/advt1.jpg">
                    </div>
					<h3>Комплексные решения</h3>
                    <p>Качественная продукция, разработанная с использованием современных технологий, надежный сервис доставки, соблюдение сроков выполнения обязательств.</p>
					
				</div>
            </div>
            <div class="col-sm-4">
                <div class="flack">
					<div class="advtImg">
                        <img src="/phpShop/template/images/home/advt4.jpg" alt="2">
                    </div>
					<h3>Всё для покраски</h3>
                    <p>Доставляем товар напрямую от мировых производителей красок. На наших складах находится более чем 6000 наименований лакокрасочной продукции.</p>
					
				</div>
            </div>
            <div class="col-sm-4">
                <div class="flack">
					<div class="advtImg">
                        <img src="/phpShop/template/images/home/advt3.jpg">
                    </div>
					<h3>Эксперты отрасли</h3>
                    <p>Мы постоянно развиваемся, стремимся получать новый опыт, знания и навыки для того, чтобы стать экспертами в своей отрасли и оказывать качественные услуги в сфере торговли лакокрасочной продукцией в Беларуси.</p>
					
				</div>
            </div>
        </div>

        <div class="row">
            <!-- <div class="col-sm-12"> -->
                <div class="bxr">
                    <div class="col-md-4 col-xs-12 "><img src="/phpShop/template/images/home/bucket.png" alt="банка"><span>Большой выбор красок и лаков</span></div>
                    <div class="col-md-4 col-xs-12 "><img src="/phpShop/template/images/home/valet.png" alt="банка"><span>Гибкая система оплаты заказа</span></div>
                    <div class="col-md-4 col-xs-12 "><img src="/phpShop/template/images/home/24-hours.png" alt="банка"><span>Прием заказов 24 часа в сутки</span></div>
                </div>
            <!-- </div> -->
        </div>

            <div class="col-sm-12">
                <div class="features_items">
                    <h2 class="title text-center">Мы рекомендуем</h2>
                    
                    <?php foreach ($recomendedProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <div class="img">
                                            <a href="/phpShop/product/<?php echo $product['id'];?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /></a>
                                        </div>
                                        
                                        <h2><?php echo Product::getPrice($product['price']);?></h2>
                                        <p>
                                            <a href="/phpShop/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    
                                </div>
                                <?php if ($product['is_new']): ?>
                                    <img src="template/images/home/new.png" class="new" alt="" />
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="about"><h2>Высокое качество по доступным ценам!</h2>
                    <h3>Уважаемые клиенты.</h3>
                    <p>Мы рады предложить Вам свои услуги в подборе строительных материалов. Мы готовы обеспечить Вас профессиональными консультациями, отличными ценами и акциями, качественным обслуживанием и доставкой товаров прямо Вам домой.</p>

                    <p>Наша компания работает на рынке строительных услуг с 2011 года. За это время мы превратились из мелкой розничной точки на рынке в сеть магазинов строительных материалов. Этот сайт станет очередным шагом в развитии компании.</p>

                    <p>Мы работаем с известными мировыми брендами, лидерами в своих отраслях. На страницах нашего сайта Вы найдете таких производителей, как: Ceresit, Alpina,Tikkurila, Sniezka, Atlas Taifun, Condor, Сенеж, Лидская лакокраска, КВИЛ, Neomid, Pinotex, ВГТ и многие другие. Исходя из вышесказанного, здесь, дорогой Покупатель, мы постараемся удовлетворить самый притязательный вкус.</p>

                    <p>Наша компания будет стараться всегда быть на пульсе времени, гибкими и пунктуальными партнерами. Цены на нашем сайте будут ВСЕГДА ниже, чем в магазинах. Также у нас существует система скидок за объём, а также постоянным партнерам: строителям и простым Покупателям.</p>

                    <p>Заказ товара с данного сайта является заказом с розничной точки по специальной цене. Чек, копия чека предоставляются с розничного объекта торговли.

                    <p>Ждем Ваших заказов</p>
                </div>


                <!-- <div class="recommended_items">
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                        <div class="imgRec">
                                            <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                        </div>
                                            <h2>$<?php echo $sliderItem['price']; ?></h2>
                                            <a href="/phpShop/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $sliderItem['name']; ?>
                                            </a>
                                            <br/><br/>
                                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/phpShop/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
            </div> -->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>