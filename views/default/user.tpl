<section>
    <h2>Ваши регистрационные данные</h2>
    <table>
        <tr>
            <td>Логин (email)</td>
            <td>{$arUser['email']}</td>
        </tr>
        <tr>
            <td>Имя</td>
            <td><input type="text" class="newName" value="{$arUser['name']}"></td>
        </tr>
        <tr>
            <td>Телефон</td>
            <td><input type="text" class="newPhone" value="{$arUser['phone']}"></td>
        </tr>
        <tr>
            <td>Адрес</td>
            <td><textarea class="newAdress">{$arUser['adress']}</textarea></td>
        </tr>
        <tr>
            <td>Новый пароль</td>
            <td><input type="password" class="newPwd1" value=""></td>
        </tr>
        <tr>
            <td>Повтор пароля</td>
            <td><input type="password" class="newPwd2" value=""></td>
        </tr>
        <tr>
            <td>Введите текущий пароль для сохранения изменений</td>
            <td><input type="password" class="curPwd" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="button" value="Сохранить изменения" onclick="updateUserData();"
            </td>
        </tr>
    </table>
</section>
