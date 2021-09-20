<aside class="aside">
    <p>Товары</p>
    <ul>
        {foreach $rsCategories as $item}
            <li> 
                <a href="#"> {$item['name']} </a>
                {if isset($item['children'])}
                    <ul>
                    {foreach $item['children'] as $itemChild}
                        <li>
                            <a href="#"> {$itemChild['name']} </a>
                        </li>
                    {/foreach}
                    </ul>
                {/if}
            </li>
        {/foreach} 
    </ul>
</aside>