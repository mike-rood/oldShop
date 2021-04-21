<?php
    /*
        Контроллер главной страницы
    */
    include_once '../models/CategoriesModel.php'; 
    
    // Тестовый экшн
    function testAction() {
        echo 'I\'m IndexController.php testAction()' . "<br>";
    }

    /*
        Данная функция вызывает шаблонизатор Smarty
    */
    function indexAction($smarty) {
        
        $rsCategories = getAllMainCatsWithChildren();   // Массив со всеми категориями, включая дочерние
        
        $smarty->assign('pageTitle', 'Main page');
        
        loadTemplate($smarty, 'index');
    }