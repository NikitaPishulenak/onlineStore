<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-3"><!-- 5 -->
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="product-information"><!--/product-information-->
                                <?php if ($product['is_new']): ?>
                                <img src="/phpShop/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>
                                
                                <h2><?php echo $product['name'];?></h2>
                                <p>Код товара: <?php echo $product['code'];?></p>
                                <span>
                                    <span>US $<?php echo $product['price'];?></span>
                                    <label>Количество:</label>
                                    <input type="text" value="3" />
                                    <button type="button" class="btn btn-fefault cart add-to-cart" data-id="<?php echo $product['id'];?>">
                                        <i class="fa fa-shopping-cart"></i>
                                        В корзину
                                    </button>
                                </span>
                                <p><b>Наличие:</b> На складе</p>
                                <p><b>Состояние:</b> Новое</p>
                                <p><b>Производитель:</b> D&amp;G</p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <?php echo $product['description'];?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>