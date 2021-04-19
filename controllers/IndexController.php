<?php
    /*
        Контроллер главной страницы
    */

    // Тестовый экшн
    function testAction() {
        echo 'I\'m IndexController.php testAction()' . "<br>";
    }

    /*
        Данная функция вызывает шаблонизатор Smarty
    */
    function indexAction($smarty) {
        $smarty->assign('pageTitle', 'Main page');
        loadTemplate($smarty, 'index');
    }