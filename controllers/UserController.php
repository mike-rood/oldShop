<?php //Контроллер функций пользователя
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';

/* AJAX регистрация пользователя
* Инициализация сессионной переменной ($_SESSION['user'])
* return json-массив данных нового пользователя
*/
function registerAction() {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $email = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $email = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
    $email = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name = trim($name);

    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);
}

//Проверка параметров для регистрации пользователя
function checkRegisterParams($email, $pwd1, $pwd2) {
    $res = array();
    if ( ! $email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }
    if ( ! $pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }
    if ( ! $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Повторите ввод пароля';
    }
    if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введённые пароли не совпадают';
    }
    return $res;
}