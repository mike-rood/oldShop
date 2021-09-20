<?php
    include_once '../config/config.php';            // Подключение файла конфигурации
    include_once '../config/db.php';                // Подключение баз данных
    include_once '../library/mainFunctions.php';    // Подключение общих функций

    // Определяем вызываемый контроллер
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

    // Определяем вызываемый экшен
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

    /*
        Вызываем функцию загрузки страницы
        $smarty - объект шаблонизатора
        $controllerName - имя контроллера
        $actionName - имя экшена
    */
    loadPage($smarty, $controllerName, $actionName);