<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container-flex">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <div class="left-sidebar">
                    <!-- <h2>Каталог</h2> -->
                    <div class="panel-group category-products">
                        <form action="/phpShop/category/3/filter" method="post" name="catFilter">
                        <?php foreach ($catFields as $catFieldsItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading field-title" >
                                    <span><?php echo $catFieldsItem['title'];?></span>
                                    <?php $fields=Category::getGroupField($catFieldsItem['idGroupFields']); foreach ($fields as $field): ?>
                                    <div><?php echo Category::getHTMLField($field['type']).'&nbsp;'.$field['name'];?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="panel-heading field-title" ><input type="submit" value="Найти"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"><?php echo Category::getCategoryName($categoryId);?></h2>

                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                        
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <div class="img">
                                            <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        </div>
                                        <h2><?php echo  Product::getPrice($product['price']); ?></h2>
                                        <p>
                                            <a href="/phpShop/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                              

                </div><!--features_items-->
            <!-- Постраничная навигация -->
            <?php echo $pagination->get(); ?>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>