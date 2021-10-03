<?php
    /*
        Контроллер главной страницы
    */
    include_once '../models/CategoriesModel.php'; 
    include_once '../models/ProductsModel.php'; 
    // Тестовый экшн
    function testAction() {
        echo 'I\'m IndexController.php testAction()' . "<br>";
    }

    /*
        Данная функция вызывает шаблонизатор Smarty
    */
    function indexAction($smarty) {
        
        $rsCategories = getAllMainCatsWithChildren();   // Массив со всеми категориями, включая дочерние
        $rsProducts = getLastProducts();
        $smarty->assign('pageTitle', 'Main page');
        $smarty->assign('rsCategories', $rsCategories);
        $smarty->assign('rsProducts', $rsProducts);        
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }