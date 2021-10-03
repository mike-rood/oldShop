<?php
    /*
        Модель для таблицы категорий
    */

    //Получает дочерние категории продуктов для категории $catId
    function getChildrenForCat($catId) {
        $catId = intval($catId);
        $queryChildrenCategories = "SELECT * FROM `categories` WHERE `parent_id` = '{$catId}'";
        $childrenCategoriesList = mysql_query($queryChildrenCategories);
        return createSmartyRsArray($childrenCategoriesList);
    }

    //Получает все главные категории продуктов с дочерними категориями
    function getAllMainCatsWithChildren() {
        $queryMainCategories = 'SELECT * FROM `categories` WHERE `parent_id` = 0';
        $mainCategoriesList = mysql_query($queryMainCategories);
        $smartyRs = array();
        while ($row = mysql_fetch_assoc($mainCategoriesList)) {
            $rsChildren = getChildrenForCat($row['id']);
            if ($rsChildren) {
                $row['children'] = $rsChildren;
            }
            $smartyRs[] = $row;
        }
        return $smartyRs;
    }

    //Получает данные категории по id
    function getCatById($catId) {
        $catId = intval($catId);
        $sql = "SELECT * FROM `categories` WHERE `id` = '{$catId}'";
        $rs = mysql_query($sql);
        return mysql_fetch_assoc($rs);
    }