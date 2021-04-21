<?php
    /*
        Настройка подключения к базе данных
    */


    $dblocation = "127.0.0.1";
    $dbname = "oldshop";
    $dbuser = "root";
    $dbpassword = "";

    $db = mysql_connect($dblocation, $dbuser, $dbpassword);
    
    if ( ! $db) {
        echo "Ошибка подключения к {$dblocation}";
        exit();
    }

    mysql_set_charset('utf8');

    if ( ! mysql_select_db($dbname, $db)) {
        echo "Ошибка подключения к {$dbname}";
        exit();
    }