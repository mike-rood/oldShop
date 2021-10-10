<div>
    <h3>{$rsProduct['name']}</h3>
    <img src="/images/products/{$rsProduct['image']}" alt="{$rsProduct['name']}">
    <p>Стоимость: {$rsProduct['price']}</p>
    <p><a id="addCart_{$rsProduct['id']}" href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a></p>
    <p>{$rsProduct['description']}</p>
</div>