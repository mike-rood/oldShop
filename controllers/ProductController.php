<?php //Контроллер страницы товаров (/product/1)

include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';

//Формирование страницы продукта
function indexAction($smarty) {
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ( ! $itemId) exit();
    //Получить данные продукта
    $rsProduct = getProductById($itemId);
    //Получить все категории
    $rsCategories = getAllMainCatsWithChildren();
    //Проверка на нахождение товара в корзине
    $smarty->assign('itemInCart', 0);
    if (in_array($itemId, $_SESSION['cart'])) {
        $smarty->assign('itemInCart', 1);
    }
    //Формирование данных для шаблонизатора
    $smarty->assign('pageTitle', $rsProduct['name']);
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProduct);
    //Сборка страницы продукта
    loadTemplate($smarty, 'head');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'aside');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}