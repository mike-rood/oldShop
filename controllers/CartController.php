<?php //Контроллер для работы с корзиной покупок (/cart/)

//Подключение модулей
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

//Добавление продукта в корзину
function addtocartAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if ( ! $itemId) return false;

    $resData = array();

    //Если значение не найдено, то добавляем
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

//Функция удаления товара из корзины
function removefromcartAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if ( ! $itemId) exit();

    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}