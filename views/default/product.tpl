<div>
    <h3>{$rsProduct['name']}</h3>
    <img src="/images/products/{$rsProduct['image']}" alt="{$rsProduct['name']}">
    <p>Стоимость: {$rsProduct['price']}</p>
    <p><a id="addCart_{$rsProduct['id']}" alt="Добавить в корзину" onClick="addToCart({$rsProduct['id']}); return false;" href="#">Добавить в корзину</a></p>
    <p>{$rsProduct['description']}</p>
</div>