<?php //Контроллер страницы категорий ( /category/1 )

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty) {
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ( ! $catId) exit();
    $rsCategory = getCatById($catId);
    $rsProducts = null;
    $rsChildCats = null;
    if ($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId);
    } else {
        $rsProducts = getProductsByCat($catId);
    }
    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    $smarty->assign('rsCategories', $rsCategories);
} 