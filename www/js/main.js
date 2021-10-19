function addToCart(itemId) {
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_'+ itemId).hide();
                $('#removeCart_'+ itemId).show();
            }
        }
    });
}

function removeFromCart(itemId) {
    console.log("js - removeFromCart("+itemId+")");
    $.ajax({
        type: 'POST',
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_'+ itemId).show();
                $('#removeCart_'+ itemId).hide();
            }
        }
    });
}

function conversionPrice(itemId) {
    let newCnt = $('#itemCnt_' + itemId).val();
    let itemPrice = $('#itemPrice_' + itemId).attr('value');
    let itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}

function getData(obj_form) {
    let hData = {};
    $('input, textarea, select', obj_form).each(function(){
        if (this.name && this.name != '') {
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
}

function registerNewUser() {
    let postData = getData('#registerBox');
    $.ajax({
        type: 'POST',
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                alert('Регистрация прошла успешно');
                //> Блок в левом столбце
                $('#registerBox').hide();
                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $('#userBox').show();
                //<
                //>Страница заказа
                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                //<                
            } else {
                alert(data['message']);
            }
        }
    });
}

/**
 * Авторизация пользователя
 */
function login() 
{
    let email = $('#loginEmail').val();
    let pwd = $('#loginPwd').val();

    let postData = "email="+ email +"&pwd=" +pwd;

    $.ajax({
        type: 'POST',
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                $('#registerBox').hide();
                $('#loginBox').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['displayName']);
                $('#userBox').show();
            } else {
                alert(data['message']);
            }
        }
    });
}

function logout() {
    $.ajax({
        type: 'POST',
        url: "/user/logout/",
        success: function() {
            alert("Вы вышли из аккаунта");
            window.location.href = "http://oldshop.local";
            $('#userBox').hide();
            $('#loginBox').show();
            $('#registerBox').show();
        }
    });
}

function showRegisterBox()
{
    if ( $(".registerBoxHidden").css('display') != 'block') {
        $(".registerBoxHidden").show();
    } else {
        $(".registerBoxHidden").hide();
    }
}

function updateUserData()
{
    console.log("js - updateUserData()");
    let name = $('.newName').val();
    let phone = $('.newPhone').val();
    let adress = $('.newAdress').val();
    let pwd1 = $('.newPwd1').val();
    let pwd2 = $('.newPwd2').val();
    let curPwd = $('.curPwd').val();

    let postData = {
        name: name,
        phone: phone,
        adress: adress,
        pwd1: pwd1,
        pwd2: pwd2,
        curPwd: curPwd
    };
    $.ajax({
        type: 'POST',
        url: "/user/update/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                $('#userLink').html(data['userName']);
                alert(data['message']);
            } else {
                alert(data['message']);
            }
        }
    });
}