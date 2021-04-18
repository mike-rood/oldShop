<?php
    // Проверяем существование в массиве _GET параметра controller
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';
    echo '$controllerName = ' . $controllerName . '<br>';

    // Проверяем в _GET параметр action
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
    echo '$actionName = ' . $actionName . '<br>';

    // Подключаем контроллер
    include_once '../controllers/' . $controllerName . 'Controller.php';

    testAction();