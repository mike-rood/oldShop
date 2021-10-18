<?php
    /*
        Файл, содержащий общие функции
    */

    // Функция загрузки страницы, обращающейся к соответствующему контроллеру и экшену
    function loadPage($smarty, $controllerName, $actionName = 'index') {
        include_once PathPrefix . $controllerName . PathPostfix; 
        $function = $actionName . 'Action';
        $function($smarty);
    }

    /*
        Функция загрузки шаблона Smarty
    */
    function loadTemplate($smarty, $templateName) {
        $smarty->display($templateName . TemplatePostfix);
    }

    /*
        Функция дебаггинга
        $value: проверяемый параметр
        $die:   1 - работа останавливается
                без параметра - работа продолжается
    */
    function d($value = null, $die = 1) {
        echo '<p>Debugging</p><pre>';
        print_r($value);
        echo '</pre>';
        if ($die) die;
    }

    /*
        Преобразование результата работы функции выборки в ассоциативный массив 
    */
    function createSmartyRsArray($rs) {
        if (! $rs) return false;
        $smartyRs = array();
        while ($row = mysql_fetch_assoc($rs)) {
            $smartyRs[] = $row;
        }
        return $smartyRs;
    }

    /**
     * Редирект
     * 
     * @param string $url адрес для перенаправления
     */
    function redirect($url)
    {
        if (! $url) $url = '/';
        header("Location: {$url}");
        exit;
    }