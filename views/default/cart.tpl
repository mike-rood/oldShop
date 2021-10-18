<section>
    <h2>Корзина покупок</h2>
    {if ! $rsProducts}<p>В корзине пусто.</p>{else}
    <h3>Данные заказа</h3>
    <table>
        <tr>
            <td>№</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за единицу</td>
            <td>Цена</td>
            <td>Действие</td>
        </tr>
        {foreach $rsProducts as $item name=products}
        <tr>
            <td>
                {$smarty.foreach.products.iteration}
            </td>
            <td>
                <a href="/product/{$item['id']}/">{$item['name']}</a>
            </td>
            <td>
                <input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});">                
            </td>
            <td>
                <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                    {$item['price']}
                </span>
            </td>
            <td>
                <span id="itemRealPrice_{$item['id']}">
                    {$item['price']}
                </span>
            </td>
            <td>
                <a id="removeCart_{$item['id']}" href="#" onclick="removeFromCart({$item['id']}); return false;" title="Удалить из корзины">Удалить</a>
                <a id="addCart_{$item['id']}" class="hideme" href="#" onclick="addToCart({$item['id']}); return false;" title="Восстановить элемент">Восстановить</a>
            </td>
        </tr>
        {/foreach}       

    </table>
    {/if}
</section>