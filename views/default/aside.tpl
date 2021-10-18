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
{if isset($arUser)}
    <div id="userBox">
        <p><a href="#" id="userLink">{$arUser['displayName']}</a></p>
        <p><a href="#" onclick="logout();">Выход</a></p>
    </div>
{else}
    <div id="userBox" class="hideme">
        <p><a href="#" id="userLink"></a></p>
        <p><a href="#" onclick="logout();">Выход</a></p>
    </div>
    <div id="loginBox">
        <p>Авторизация</p>
        <p><input type="text" id="loginEmail" name="loginEmail" value="" placeholder="Введите Email"></p>
        <p><input type="password" id="loginPwd" name="loginPwd" value="" placeholder="Введите пароль"></p>
        <p><input type="button" onclick="login();" value="Войти"></p>
    </div>
    {include 'registerBox.tpl'}
{/if}
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