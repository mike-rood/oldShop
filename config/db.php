<?php
    /*
        Настройка подключения к базе данных
    */

    //Настройки подключения к БД
    $dblocation = "127.0.0.1";
    $dbname = "oldshop";
    $dbuser = "root";
    $dbpassword = "";

    //Инициализация подключения к БД
    $db = mysql_connect($dblocation, $dbuser, $dbpassword);
    
    //Проверка подключения к серверу с базой данных
    if ( ! $db) {
        echo "Ошибка подключения к {$dblocation}";
        exit();
    }

    // Установка кодировки по умолчанию для текущего соединения
    mysql_set_charset('utf8');

    //Проверка подключения к БД
    if ( ! mysql_select_db($dbname, $db)) {
        echo "Ошибка подключения к {$dbname}";
        exit();
    }