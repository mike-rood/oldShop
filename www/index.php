<?php
    include_once '../config/config.php';
    include_once '../library/mainFunctions.php';

    // Проверяем существование в массиве _GET параметра controller
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

    // Проверяем в _GET параметр action
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

    loadPage($controllerName, $actionName);

