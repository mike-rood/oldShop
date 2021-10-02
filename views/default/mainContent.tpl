<section class="mainContent">
    {foreach $rsProducts as $item name=products}
        <div class="product">
            <p>
                <a href="/product/{$item['id']}">
                <img class="thumbnail" src="/images/products/{$item['image']}">
                </a>                
            </p>
            <p>
                <a href="/product/{$item['id']}">{$item['name']}</a>
            </p>
        </div>
    {/foreach}
</section>