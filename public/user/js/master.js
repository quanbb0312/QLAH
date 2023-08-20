 ///add to cart
 $('body').on('click', '.AddCartLoop', function(e) {
    e.preventDefault();
    let id = $(this).attr('data-id');
    $.ajax({
        type: "POST",
        url: _appUrl + "/shop/cart/add",
        data: {
            id: id,
            _token: _token
        },
        success: function(data) {
            $('a[data-type="sidebarAllMainCart"]').trigger('click');
            getCartSidebar();
        },
        error: function() {
            $('#alertError').modal('show').find('.modal-body').html(
                'Xin lỗi, có vấn đề về tồn kho, vui lòng thử lại sau!');;
        }
    })
});

//get list product in cart
function getCartSidebar() {
    setTimeout(function() {
        $.ajax({
            type: "GET",
            url: _appUrl + "/shop/cart/list-cart",
            data: {
                _token: _token
            },
            success: function(data) {
                showProductCart(data);
            },
            error: function() {
                $('#alertError').modal('show').find('.modal-body').html(
                    'Xin lỗi, có vấn đề về tồn kho, vui lòng thử lại sau!');
            }
        })
    }, 0)
};

//show product in cart
function showProductCart(data) {
    let item = '';
    let total = 0;
    let count = 0;
    $.each(data, function(index, value) {
        total += value.price * value.quantity;
        count++;
        item += `
                <div class="itemMain" data-id="${value.id}">
                <a><img class="itemImage img-fluid" src="${_appUrl}/storage/products/${value.image}"/></a>
                <div class="itemInfo">
                <a class="itemTitle">${value.nameVi}</a>
                <div class="itemPriceInfo">
                <span class="itemPriceMain">${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value.price)}</span>
                </div>
                <div class="itemAction">
                <div class="groupAdd">
                <div class="itemQuantityCart">
                <button class="qtyBtn minusQuan" data-type="minus">-</button>
                <input type="number" data-href="{{ route('shop-cart-update') }}" id="itemQuantityCart" name="quantity" data-id=${value.id} value="${value.quantity}" min="1" max="${value.max}" class="quantitySelector">
                <button class="qtyBtn plusQuan" data-type="plus">+</button>
                </div>
                <div data-href="{{ route('shop-cart-remove') }}" class="removeItemCart">
                <i class="lni lni-trash"></i>
                </div>
                </div>
                </div>
                </div>
                </div>
                `;
    });
    $('.sidebarAllMainCart .sidebarAllBody').html('');
    $('.sidebarAllMainCart .totalPrice span').last().html(new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND'
    }).format(total))
    $('.headerCart .headerCartCount').html(count)
    $('.sidebarAllMainCart .sidebarAllBody').html(item);

}

//update cart
function updateQuantitySidebar(that) {
    var idItem = $(that).parent().find('input').attr('data-id');
    var quanItem = $(that).parent().find('input').val();
    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/cart/update",
        data: {
            _token: _token,
            id: idItem,
            quantity: quanItem
        },
        success: function(cart) {
            $('.headerCartCount').html(cart.count)
            $('.totalPrice span').last().html(new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(cart.TotalAllRefreshAjax))
        },
        error: function(XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    })
}
$('body').on('click', '.sidebarAllMainCart .itemQuantityCart .qtyBtn', function(e) {
    e.preventDefault();
    let type = $(this).data('type');
    let max = $('#itemQuantityCart').attr('max');
    if (type == "plus") {
        if (parseInt($(this).prev().val()) < max) {
            $(this).prev().val(parseInt($(this).prev().val()) + 1);
        }
    } else {
        if (parseInt($(this).next().val()) !== 1)
            $(this).next().val(parseInt($(this).next().val()) - 1);
    }
    updateQuantitySidebar($(this))
})
$('body').on('change', '.sidebarAllMainCart .itemQuantityCart input', function(e) {
    updateQuantitySidebar($(this));
})

//remove product in cart
$('body').on('click', '.removeItemCart', function(e) {
    e.preventDefault();
    var id = $(this).parents('.itemMain').attr('data-id');
    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/cart/remove",
        data: {
            _token: _token,
            id: id,
        },
        success: function(cart) {
            showProductCart(cart);
        },
        error: function(XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    })
});

// show cart modal
$('a[data-type="sidebarAllMainCart"]').on('click', function() {
    getCartSidebar();
});

//register customer
$('#register-customer').on('click', function(e) {
    $('#message-error-login').html('');
    $('#message-error-create').html('');
    e.preventDefault();
    let name = $('#register-first-name').val();
    let email = $('#register-email').val();
    let phone = $('#register-phone').val();
    let address = $('#register-address').val();
    let password = $('#register-password').val();

    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/gaurd/register",
        data: {
            _token: _token,
            name: name,
            email: email,
            phone: phone,
            address: address,
            password: password,
        },
        success: function(res) {
            $('#modalLoginTab').trigger('click');
            $('#message-success-login').html('You have successfully registered your account!!!')
        },
        error: function(XMLHttpRequest, textStatus) {
            console.log(XMLHttpRequest.responseJSON.message);
            $('#message-error-create').html(XMLHttpRequest.responseJSON.message);
        }
    })
});

//login-customer
$('#login-customer').on('click', function(e) {
    $('#message-error-login').html('');
    $('#message-success-login').html('');
    e.preventDefault();
    let email = $('#login-email').val();
    let password = $('#login-password').val();

    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/gaurd/login",
        data: {
            _token: _token,
            email: email,
            password: password,
        },
        success: function(res) {
            if (res == 200) {
                location.reload();
            } else {
                $('#message-error-login').html('Email or passord is not correct!');
            }
        },
        error: function(XMLHttpRequest, textStatus) {
            $('#message-error-login').html(XMLHttpRequest.responseJSON.message);
        }
    })
});

$('#payment-view').on('click', function(e) {
    $('#message-error-login').html('');
    e.preventDefault();
    let href = $(this).attr('href');

    $.ajax({
        type: 'POST',
        url: href,
        data: {
            _token: _token,
        },
        success: function(res) {
            if (res == 200) {
                console.log('have customer');
                $('#payment-get-view').submit();
            } else {
                console.log('have not customer');
                $('.closeSidebar').trigger('click');
                $('#customer-setting').trigger('click');
                $('#message-error-login').html('You need to login to access the payment page');
            }
        },
        error: function(XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    })
})

//forget password
$('#check_forget_password').on('click', function(e){
    e.preventDefault();
    $('#message-success-login').html('');
    $('#message-error-email').html('');
    let email = $('#recover-email').val();

    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/gaurd/sendmail",
        data: {
            _token: _token,
            email: email,
        },
        success: function(res) {
            if (res == 200) {
                $('#modalLoginTab').trigger('click');
                $('#message-success-login').html('New password has been sent to your email');
                console.log('success');
            } else {
                $('#message-error-email').html('Email is not registered!');
            }
        },
        error: function(XMLHttpRequest, textStatus) {
            $('#message-error-email').html(XMLHttpRequest.responseJSON.message);
        }
    })
});

//chang info
$('#change-info').on('click', function(e){
    e.preventDefault();
    $('#password').val('');
    $('#newpassword').val('');
    $('#renewpassword').val('');
    $('#message-success-change-info').html('');
    $('#message-error-change-info').html('');
    let name = $('#name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let address = $('#address').val();
    let password = $('#password').val();
    let newpassword = $('#newpassword').val();
    let renewpassword = $('#renewpassword').val();

    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/gaurd/change-info",
        data: {
            _token: _token,
            name: name,
            email: email,
            phone: phone,
            address: address,
            password: password,
            newpassword: newpassword,
            renewpassword: renewpassword,
        },
        success: function(res) {
            if (res == 200) {
                //thay đổi mk thành công
                $('#message-success-change-info').html('You have successfully changed the information!');
                $('#name-cunstomer').attr('value', name);
                $('#password').val('');
                $('#newpassword').val('');
                $('#renewpassword').val('');
            } else if (res == 401) {
                //mk không đúng
                $('#message-error-change-info').html('Incorrect password!');
            } else {
                //mk nhập lại không đúng
                $('#message-error-change-info').html('Re-entered password is incorrect!');
            }
        },
        error: function(XMLHttpRequest, textStatus) {
            $('#message-error-change-info').html(XMLHttpRequest.responseJSON.message);
        }
    })
})




