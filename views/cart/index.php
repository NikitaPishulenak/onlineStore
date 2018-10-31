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
                                        <a href="/phpShop/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                    <div id="msCart">
                        <table class="table-bordered table">
                            <div class="header">
                                <div class="image">Фото</div>
                                <div class="code">Код<br>товара &nbsp;</div>
                                <div class="title">Наименование</div>
                                <div class="count">Количество</div>
                                <div class="price">Цена</div>
                            </div>
                            <?php foreach ($products as $product): ?>
                                <div class="productRow" data-id="<?php echo $product['id'];?>">
                                <div class="image">
            	                    <img src="/phpShop/template/images/home/new.png" alt="Фото" title="<?php echo $product['name'];?>"/>
                                </div>
                                <div class="code"><span><?php echo $product['code'];?></span></div>
                                <div class="title">
                                    <a href="/phpShop/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a><br/>
                                    <button class="remove-btn" title="Удалить">Удалить</button>
                                </div>
                                <div class="count">
                                    <a href="#" class="bxr-quantity-button-minus">-</a>
                                    <span class="bxr-quantity-text"><?php echo $productsInCart[$product['id']];?></span>
                                    <a href="/phpShop/cart/addAjax/<?php echo $product['id'];?>" class="bxr-quantity-button-plus">+</a>
                                </div>
                                <div class="price"><span><?php echo $product['price'];?></span> руб.</div>

                                </div>
                            <?php endforeach; ?>
                            <div class="footer">
                                <div class="image">&nbsp;</div>
                                <div class="code">&nbsp;</div>
                                <div class="total">Итого:</div>
                                <div class="total_count"><span class="ms2_total_count"><?php echo $totalCauntProductInCart;?></span> шт.</div>
                                <div class="total_cost"><span class="ms2_total_cost">224.1</span> руб. </div>
                            </div>

                            
                        </table>
                    </div>      

                    <table class="table-bordered table-striped table">    
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Стомость, BYN</th>
                                <th>Количество, шт</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td>                        
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Общая стоимость:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                    <?php else: ?>
                        <p>Корзина пуста</p>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>