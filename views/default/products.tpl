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
</main>