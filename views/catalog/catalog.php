<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container-flex">
        <div class="row">
            <div class="col-sm-2 left-sidebar">
                <!-- <div class=""> -->
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/phpShop/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <!-- </div> -->
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Мы предлагаем:</h2>
                    
                    <?php foreach ($CatalogProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <div class="img">
                                            <a href="/phpShop/product/<?php echo $product['id'];?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /></a>
                                        </div>
                                        <h2><?php echo $product['price'];?> руб.</h2>
                                        <p>
                                            <a href="/phpShop/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php if ($product['is_new']): ?>
                                <img src="/phpShop/template/images/home/new.png" class="new" alt="" />
                                
                                <?php if ($product['is_recommended']): ?>
                                    <img src="/phpShop/template/images/home/rec.png" class="rec" alt="" />
                            <?php endif; ?>

                            <?php endif; ?>
                        </div>
                    <?php endforeach;?>         
                </div>
                
                <!-- Постраничная навигация -->
                <?php echo $pagination->get(); ?>          

                

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
