<aside class="aside">
    <section>
    <p><a href="http://oldshop.local">Товары</a></p>
    <ul>
        {foreach $rsCategories as $item}
            <li> 
                <a href="/category/{$item['id']}/"> {$item['name']} </a>
                {if isset($item['children'])}
                    <ul>
                    {foreach $item['children'] as $itemChild}
                        <li>
                            <a href="/category/{$itemChild['id']}/"> {$itemChild['name']} </a>
                        </li>
                    {/foreach}
                    </ul>
                {/if}
            </li>
        {/foreach} 
    </ul>
    </section>
    <div>
        <p>Корзина</p>
        <p><a href="/cart/" title="Перейти в корзину">В корзине:</a>
            <span id="cartCntItems">
                {if $cartCntItems > 0}{$cartCntItems}{else}пусто{/if}
            </span>
        </p>    
    </div>
</aside>
<main class="main">