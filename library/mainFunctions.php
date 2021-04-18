<?php
    /*
        Файл, содержащий общие функции
    */

    // Функция загрузки страницы, обращающейся к соответствующему контроллеру и экшену
    function loadPage($controllerName, $actionName = 'index') {
        include_once PathPrefix . $controllerName . PathPostfix; 
        $function = $actionName . 'Action';
        $function();
    }