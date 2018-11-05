<?php

include 'AdminBase.php';
/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        // echo "adm";
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}
