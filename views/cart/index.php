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
                        <div class="table-bordered table">
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
                                    <img src="<?php echo Product::getImage($product['id']);?>" alt="Фото" title="<?php echo $product['name'];?>"/>
                                </div>
                                <div class="code"><span><?php echo $product['code'];?></span></div>
                                <div class="title">
                                    <a href="/phpShop/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a><br/>
                                    <button class="remove-btn" title="Удалить" data-idProduct="<?php echo $product['id'];?>">Удалить</button>
                                </div>
                                <div class="count">
                                    <a href="#" class="bxr-quantity-button-minus">-</a>
                                    <span class="bxr-quantity-text"><?php echo $productsInCart[$product['id']];?></span>
                                    <a href="#" class="bxr-quantity-button-plus">+</a>
                                </div>
                                <div class="price"><span><?php echo $product['price'];?></span> руб.</div>

                                </div>
                            <?php endforeach; ?>
                            <div class="footer">
                                <div class="image">&nbsp;</div>
                                <div class="code">&nbsp;</div>
                                <div class="total">Итого:</div>
                                <div class="total_count"><span class="ms2_total_count"><?php echo $totalCauntProductInCart;?></span> шт.</div>
                                <div class="total_cost"><span class="ms2_total_cost"><?php echo $totalPrice;?></span> руб. </div>
                            </div>
                        </div>
                        <button class="completed_order">Оформить заказ</button>
                    
                        <div id="orderForm" class="col-sm-11">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li class="error"> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post" name="orderData">

                                        <p>Ваша имя</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p>Номер телефона</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
                                </div>
                        </div>     
                    </div> 

                    
                    <?php else: ?>
                        <p>Корзина пуста</p>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>