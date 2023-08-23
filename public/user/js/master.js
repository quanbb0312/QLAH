///add to cart
$('body').on('click', '.AddCartLoop', function (e) {
    e.preventDefault();

    // Lấy giá trị thuộc tính 'data-id' của phần tử được bấm
    let id = $(this).attr('data-id');

    // Gọi Ajax để thêm sản phẩm vào giỏ hàng
    $.ajax({
        type: "POST",
        url: _appUrl + "/shop/cart/add", // Đường dẫn tới phương thức thêm vào giỏ hàng
        data: {
            id: id,
            _token: _token // Thêm token bảo vệ CSRF để xác thực yêu cầu
        },
        success: function (data) {
            // Khi yêu cầu thành công, kích hoạt sự kiện 'click' trên một phần tử khác
            $('a[data-type="sidebarAllMainCart"]').trigger('click');

            // Gọi hàm để cập nhật thông tin giỏ hàng trong thanh sidebar
            getCartSidebar();
        },
        error: function () {
            // Khi xảy ra lỗi, hiển thị thông báo lỗi trong modal
            $('#alertError').modal('show').find('.modal-body').html(
                'Xin lỗi, có vấn đề về tồn kho, vui lòng thử lại sau!');
        }
    })
});


//get list product in cart
function getCartSidebar() {
    setTimeout(function () {
        // Gửi yêu cầu Ajax sau một thời gian chờ (0ms) để cập nhật thông tin giỏ hàng trong thanh sidebar
        $.ajax({
            type: "GET",
            url: _appUrl + "/shop/cart/list-cart", // Đường dẫn tới phương thức liệt kê giỏ hàng
            data: {
                _token: _token // Thêm token bảo vệ CSRF để xác thực yêu cầu
            },
            success: function (data) {
                // Khi yêu cầu thành công, gọi hàm showProductCart để hiển thị sản phẩm trong giỏ hàng
                showProductCart(data);
            },
            error: function () {
                // Khi xảy ra lỗi, hiển thị thông báo lỗi trong modal
                $('#alertError').modal('show').find('.modal-body').html(
                    'Xin lỗi, có vấn đề về tồn kho, vui lòng thử lại sau!');
            }
        })
    }, 0);
};


//show product in cart
function showProductCart(data) {
    // Khởi tạo biến để chứa HTML tạo các sản phẩm trong giỏ hàng
    let item = '';
    let total = 0;
    let count = 0;

    // Duyệt qua từng sản phẩm trong dữ liệu trả về từ yêu cầu Ajax
    $.each(data, function (index, value) {
        // Tính tổng giá trị cho các sản phẩm và đếm số lượng sản phẩm
        total += value.price * value.quantity;
        count++;

        // Tạo HTML cho mỗi sản phẩm trong giỏ hàng
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

    // Đặt HTML đã tạo vào vị trí tương ứng trong giao diện người dùng
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
    // Lấy ID sản phẩm và số lượng từ phần tử HTML mà hàm này được gọi từ
    var idItem = $(that).parent().find('input').attr('data-id');
    var quanItem = $(that).parent().find('input').val();

    // Gửi yêu cầu Ajax để cập nhật số lượng sản phẩm trong giỏ hàng
    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/cart/update", // Đường dẫn tới phương thức cập nhật số lượng
        data: {
            _token: _token, // Token bảo vệ CSRF
            id: idItem,
            quantity: quanItem
        },
        success: function (cart) {
            // Khi yêu cầu thành công, cập nhật số lượng sản phẩm và tổng giá trị trong giao diện người dùng
            $('.headerCartCount').html(cart.count); // Cập nhật số lượng sản phẩm trong biểu tượng giỏ hàng trên header
            $('.totalPrice span').last().html(new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(cart.TotalAllRefreshAjax)); // Cập nhật tổng giá trị giỏ hàng
        },
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus); // Xử lý lỗi Ajax
        }
    });
}

$('body').on('click', '.sidebarAllMainCart .itemQuantityCart .qtyBtn', function (e) {
    e.preventDefault();

    // Lấy giá trị của thuộc tính 'data-type' từ phần tử được bấm
    let type = $(this).data('type');

    // Lấy giá trị tối đa từ thuộc tính 'max' của phần tử input
    let max = $('#itemQuantityCart').attr('max');

    // Kiểm tra nút "plus" hoặc "minus" đã được bấm
    if (type == "plus") {
        // Tăng số lượng nếu chưa vượt quá giá trị tối đa
        if (parseInt($(this).prev().val()) < max) {
            $(this).prev().val(parseInt($(this).prev().val()) + 1);
        }
    } else {
        // Giảm số lượng nếu lớn hơn 1
        if (parseInt($(this).next().val()) !== 1)
            $(this).next().val(parseInt($(this).next().val()) - 1);
    }

    // Gọi hàm cập nhật số lượng sản phẩm
    updateQuantitySidebar($(this));
});

$('body').on('change', '.sidebarAllMainCart .itemQuantityCart input', function (e) {
    // Gọi hàm cập nhật số lượng sản phẩm khi giá trị input thay đổi
    updateQuantitySidebar($(this));
});


//remove product in cart
$('body').on('click', '.removeItemCart', function (e) {
    e.preventDefault();

    // Lấy ID sản phẩm từ thuộc tính 'data-id' của phần tử cha
    var id = $(this).parents('.itemMain').attr('data-id');

    // Gửi yêu cầu Ajax để xóa sản phẩm khỏi giỏ hàng
    $.ajax({
        type: 'POST',
        url: _appUrl + "/shop/cart/remove", // Đường dẫn tới phương thức xóa sản phẩm
        data: {
            _token: _token, // Token bảo vệ CSRF
            id: id,
        },
        success: function (cart) {
            // Khi yêu cầu thành công, gọi hàm showProductCart để cập nhật giao diện sản phẩm trong giỏ hàng
            showProductCart(cart);
        },
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus); // Xử lý lỗi Ajax
        }
    });
});

// show cart modal
$('a[data-type="sidebarAllMainCart"]').on('click', function () {
    getCartSidebar();
});

//register customer
$('#register-customer').on('click', function (e) {
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
        success: function (res) {
            $('#modalLoginTab').trigger('click');
            $('#message-success-login').html('You have successfully registered your account!!!')
        },
        error: function (XMLHttpRequest, textStatus) {
            console.log(XMLHttpRequest.responseJSON.message);
            $('#message-error-create').html(XMLHttpRequest.responseJSON.message);
        }
    })
});

//login-customer
$('#login-customer').on('click', function (e) {
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
        success: function (res) {
            if (res == 200) {
                location.reload();
            } else {
                $('#message-error-login').html('Email or passord is not correct!');
            }
        },
        error: function (XMLHttpRequest, textStatus) {
            $('#message-error-login').html(XMLHttpRequest.responseJSON.message);
        }
    })
});

$('#payment-view').on('click', function (e) {
    $('#message-error-login').html('');
    e.preventDefault();
    let href = $(this).attr('href');

    $.ajax({
        type: 'POST',
        url: href,
        data: {
            _token: _token,
        },
        success: function (res) {
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
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    })
})

//forget password
$('#check_forget_password').on('click', function (e) {
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
        success: function (res) {
            if (res == 200) {
                $('#modalLoginTab').trigger('click');
                $('#message-success-login').html('New password has been sent to your email');
                console.log('success');
            } else {
                $('#message-error-email').html('Email is not registered!');
            }
        },
        error: function (XMLHttpRequest, textStatus) {
            $('#message-error-email').html(XMLHttpRequest.responseJSON.message);
        }
    })
});

//chang info
$('#change-info').on('click', function (e) {
    e.preventDefault();
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
        success: function (res) {
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
        error: function (XMLHttpRequest, textStatus) {
            $('#message-error-change-info').html(XMLHttpRequest.responseJSON.message);
        }
    })
})




