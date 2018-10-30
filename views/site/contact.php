<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 padding-right">

                <?php if ($result): ?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Обратная связь</h2>
                        <h5>Есть вопрос? Напишите нам. Cпециалист оперативно перезвонит и ответит на все ваши вопросы!</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>
                                <input type="text" name="name" placeholder="Ваше имя" value="<?php echo $name; ?>"/>
                            </p>
                            <p>
                                <input type="phone" name="phone" placeholder="Номер телефона" value="<?php echo $phon; ?>"/>
                            </p>
                            <p>
                                <textarea type="text" name="userText" placeholder="Сообщение" rows="5"><?php echo $message; ?></textarea>
                            </p>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>