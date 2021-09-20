<?php
    /*
        Модель для таблицы категорий
    */

    function getChildrenForCat($catId) {
        $queryChildrenCategories = "SELECT * FROM categories WHERE parent_id = '{$catId}'";
        $childrenCategoriesList = mysql_query($queryChildrenCategories);
        return createSmartyRsArray($childrenCategoriesList);
    }

    function getAllMainCatsWithChildren() {
        $queryMainCategories = 'SELECT * FROM categories WHERE parent_id = 0';
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