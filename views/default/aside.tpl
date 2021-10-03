<aside class="aside">
    <p>Товары</p>
    <ul>
        {foreach $rsCategories as $item}
            <li> 
                <a href="/?controller=category&id={$item['id']}"> {$item['name']} </a>
                {if isset($item['children'])}
                    <ul>
                    {foreach $item['children'] as $itemChild}
                        <li>
                            <a href="/?controller=category&id={$itemChild['id']}"> {$itemChild['name']} </a>
                        </li>
                    {/foreach}
                     </ul>
                {/if}
            </li>
        {/foreach} 
    </ul>
</aside>