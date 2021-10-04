<section class="category">
    <h1>Товары категории {$rsCategory['name']}</h1>
        <section class="products">
            {foreach $rsProducts as $item name=products}
                <div> 
                    <p>
                        <a href="/product/{$item['id']}"><img class="thumbnail" src="/images/products/{$item['image']}" alt='{$item['name']}'></a>                
                    </p>
                    <p>
                        <a href="/product/{$item['id']}">{$item['name']}</a>
                    </p>
                </div>
            {/foreach}
        </section>
    {foreach $rsChildCats as $item name=childCats}
        <h2>
            <a href="/category/{$item['id']}/">{$item['name']}</a>
        </h2>
    {/foreach}
</section>