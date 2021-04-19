<?php
    /*
        Файл конфигурации
    */

    //> Константы, используемые в формировании имени контроллера, к которому идёт обращение
    define('PathPrefix', '../controllers/');
    define('PathPostfix', 'Controller.php');
    //<

    //> Используемый шаблон
    $template = 'default';

    // Пути к файлам шаблонов (*.tpl)
    define ('TemplatePrefix', "../views/{$template}/");
    define  ('TemplatePostfix', '.tpl');

    //Пути к файлам шаблонов в вебпространстве
    define ('TemplateWebPath', "/templates/{$template}/");

    //<

    //> Инициация шаблонизатора Smarty
    require('../library/Smarty/libs/Smarty.class.php');
    $smarty = new Smarty();

    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('../tmp/smarty/templates_c');
    $smarty->setCacheDir('../tmp/smarty/cache');
    $smarty->setConfigDir('../library/Smarty/configs');

    $smarty->assign('templateWebPath', TemplateWebPath);
    //<