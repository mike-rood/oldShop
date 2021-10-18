<div>
    <h3>{$rsProduct['name']}</h3>
    <img src="/images/products/{$rsProduct['image']}" alt="{$rsProduct['name']}">
    <p>Стоимость: {$rsProduct['price']}</p>
    <p>
        <a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} alt="Удалить из корзины" onclick="removeFromCart({$rsProduct['id']}); return false;" href="#">Удалить из корзины</a>
        <a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} alt="Добавить в корзину" onclick="addToCart({$rsProduct['id']}); return false;" href="#">Добавить в корзину</a>
    </p>
    <p>{$rsProduct['description']}</p>
</div>