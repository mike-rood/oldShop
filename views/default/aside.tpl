<aside class="aside">
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
</aside>
<main class="main">