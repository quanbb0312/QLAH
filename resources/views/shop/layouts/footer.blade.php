<?php

use Illuminate\Support\Facades\Auth;
?>

<footer id="footer">
    <div class="container">
        <div class="footerMain">
            <div class="footerMainColumns">
                <div class="footerMainColumnItem">
                    <div class="footerMainAddress">
                        <h4>
                            Thông tin liên hệ
                        </h4>
                        <div class="footerLogo">
                            <a href="http://127.0.0.1:8000/shop/">
                                <img src="{{ asset('logo/logo.png') }}" class="lazyload img-fluid" alt="" />
                            </a>
                        </div>
                        <ul>
                            <li class="contact-1"><i class="lni lni-map"></i> <span>20 Cộng Hoà Phường 12 Quận Tân Bình
                                    TPHCM</span></li>


                            <li class="contact-2"><i class="lni lni-phone"></i> <span>0898406358</span></li>


                            <li class="contact-3"><i class="lni lni-envelope"></i> <span>qlahcomputer@gmail.com</span>
                            </li>


                            <li class="contact-4"><i class="lni lni-timer"></i> <span>Thứ 2 - Thứ 7 (9h -
                                    18h30)</span></li>

                        </ul>
                    </div>
                </div>


                <div class="footerMainColumnItem">
                    <div class="footerMainList">
                        <h4>
                            Hổ Trợ Khách Hàng
                            <i class="lni lni-chevron-right"></i>
                        </h4>
                        <div class="FooterMainListToggle">
                            <ul>
                                <li class="item">
                                    <a href="" title="Giới thiệu">Giới thiệu</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Điều khoản dịch vụ">Điều khoản dịch
                                        vụ</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Liên hệ">Liên hệ</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footerMainColumnItem">
                    <div class="footerMainList">
                        <h4>
                            Chính sách
                            <i class="lni lni-chevron-right"></i>
                        </h4>
                        <div class="FooterMainListToggle">
                            <ul>

                                <li class="item">
                                    <a href="" title="Phương thức thanh toán / Đặt hàng">Phương thức thanh toán /
                                        Đặt hàng</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Phương thức giao hàng">Phương thức
                                        giao hàng</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Chính sách đổi trả">Chính sách đổi
                                        trả</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Chính sách trả góp">Chính sách trả
                                        góp</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Quy định bảo hành">Quy định bảo hành</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Chính sách bảo mật">Chính sách bảo
                                        mật</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Hướng dẫn mua hàng">Hướng dẫn mua
                                        hàng</a>
                                </li>

                                <li class="item">
                                    <a href="" title="Bảng giá thu cũ đổi mới">Bảng giá thu
                                        cũ đổi mới</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footerMainColumnItem">
                    <div class="footerMainList">
                        <h4>
                            Về chúng tôi
                            <i class="lni lni-chevron-right"></i>
                        </h4>
                        <div class="FooterMainListToggle">
                            <div class="newletterSocial">
                                <ul>
                                    <li class="newletterSocialFacebook"><a target="_blank" href="#"><i
                                                class="lni lni-facebook"></i></a></li>

                                    <li class="newletterSocialYoutube"><a target="_blank" href="#"><i
                                                class="lni lni-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footerBottom">
        <div class="container">
            <div class="footerBottomMain">
                <div class="footerBottomMainItem text">
                    <p>© 2023 - All rights reserved by <a target="_blank" href="https://f1gen.com/"></a> <a
                            target="_blank" href="https://www.haravan.com?ref=f1gen">Product by QLAH
                            Team
                        </a></p>
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="modalLogo">

                            <a href="http://127.0.0.1:8000/shop/">
                                <img src="{{ asset('logo/logo.png') }}" class="lazyload img-fluid" alt="QLAH" />
                            </a>
                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="modalLoginTab" data-toggle="pill" href="#modalLogin"
                                role="tab" aria-controls="modalLogin" aria-selected="true">Đăng nhập</a>
                            <a class="nav-link" id="modalForgetTab" data-toggle="pill" href="#modalForget"
                                role="tab" aria-controls="modalForget" aria-selected="false">Quên mật khẩu</a>
                            @if (Auth::guard('customers')->user() != null)
                                <a class="nav-link" id="modalChangPwTab" data-toggle="pill" href="#modalChangPw"
                                    role="tab" aria-controls="modalChangPw" aria-selected="false">Đổi thông
                                    tin</a>
                            @endif
                            <a class="nav-link" id="modalRegisterTab" data-toggle="pill" href="#modalRegister"
                                role="tab" aria-controls="modalRegister" aria-selected="false">Đăng ký</a>
                            @if (Auth::guard('customers')->user() != null)
                                <a class="nav-link" href="{{ route('gaurd-logout') }}">Đăng xuất</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="modalLogin" role="tabpanel"
                                aria-labelledby="modalLoginTab">
                                <h5 class="text-center">
                                    ĐĂNG NHẬP
                                </h5>
                                <div class="login-form-body">
                                    <form accept-charset='UTF-8' action='/account/login' id='customer_login'
                                        method='post'>
                                        <input name='form_type' type='hidden' value='customer_login'>
                                        <input name='utf8' type='hidden' value='✓'>

                                        @if (Auth::guard('customers')->user())
                                            <div class="form-group">
                                                <label for="name">Name*</label>
                                                <input type="text" id="name-cunstomer"
                                                    value="{{ Auth::guard('customers')->user()->name }}"
                                                    class="form-control" disabled name="email" required>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="login-email">Email*</label>
                                            <input type="email" id="login-email"
                                                value="<?= Auth::guard('customers')->user() ? Auth::guard('customers')->user()->email : '' ?>"
                                                <?= Auth::guard('customers')->user() ? 'disabled' : '' ?>
                                                class="form-control" name="customer[email]" required>
                                        </div>
                                        @if (!Auth::guard('customers')->user())
                                            <div class="form-group">
                                                <label for="login-password">Mật khẩu*</label>
                                                <input type="password" id="login-password" class="form-control"
                                                    name="customer[password]" required>
                                            </div>
                                        @endif
                                        <p id="message-error-login" style="color:red"></p>
                                        <p id="message-success-login" style="color:green"></p>
                                        <div class="form-group">
                                            <button <?= Auth::guard('customers')->user() ? 'disabled' : '' ?>
                                                type="submit" id="login-customer"
                                                data-href="{{ route('gaurd-login') }}"
                                                class="btn btn-primary hoverOpacity">
                                                ĐĂNG NHẬP
                                            </button>
                                        </div>

                                        <input id='f76e403103c849eea63fddfc8d8dc149' name='g-recaptcha-response'
                                            type='hidden'><noscript
                                            data-src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript><noscript>grecaptcha.ready(function()
                                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                                            'submit'}).then(function(token)
                                            {document.getElementById('f76e403103c849eea63fddfc8d8dc149').value =
                                            token;});});</noscript>
                                    </form>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="modalForget" role="tabpanel"
                                aria-labelledby="modalForgetTab">
                                <h5 class="text-center">
                                    QUÊN MẬT KHẨU
                                </h5>
                                <div class="recover-form-body">

                                    <form accept-charset='UTF-8' action='/account/recover' method='post'>
                                        <input name='form_type' type='hidden' value='recover_customer_password'>
                                        <input name='utf8' type='hidden' value='✓'>

                                        <div class="form-group">
                                            <label for="recover-email">Email*</label>
                                            <input type="email" id="recover-email" value=""
                                                class="form-control" name="email" required>
                                        </div>
                                        <p style="color:red" id="message-error-email"></p>
                                        <div class="form-group">
                                            <button type="submit" data-href="{{ route('gaurd-sendmail') }}"
                                                id="check_forget_password" class="btn btn-primary hoverOpacity">
                                                Gửi
                                            </button>
                                        </div>

                                        <input id='e435a4b11a094625aebc9a67f25f90f1' name='g-recaptcha-response'
                                            type='hidden'><noscript
                                            data-src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript><noscript>grecaptcha.ready(function()
                                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                                            'submit'}).then(function(token)
                                            {document.getElementById('e435a4b11a094625aebc9a67f25f90f1').value =
                                            token;});});</noscript>
                                    </form>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="modalRegister" role="tabpanel"
                                aria-labelledby="modalRegisterTab">
                                <h5 class="text-center">
                                    ĐĂNG KÝ
                                </h5>
                                <div class="register-form-body">
                                    <form accept-charset='UTF-8' action='/account' id='create_customer'
                                        method='post'>
                                        <input name='form_type' type='hidden' value='create_customer'>
                                        <input name='utf8' type='hidden' value='✓'>
                                        <div class="form-group">
                                            <label for="register-first-name">Name*</label>
                                            <input type="text" id="register-first-name" class="form-control"
                                                name="customer[first_name]" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-email">Email*</label>
                                            <input type="email" id="register-email" class="form-control"
                                                name="customer[email]" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-phone">Phone*</label>
                                            <input type="text" id="register-phone" class="form-control"
                                                name="customer[phone]" pattern='^\+?\d{0,10}' required>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-address">Address*</label>
                                            <input type="text" id="register-address" class="form-control"
                                                name="customer[address]" pattern='^\+?\d{0,10}' required>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-password">Mật khẩu*</label>
                                            <input type="password" id="register-password" class="form-control"
                                                name="customer[password]" required>
                                        </div>
                                        <p style="color:red" id="message-error-create"></p>
                                        <div class="form-group">
                                            <button type="submit" id="register-customer"
                                                data-href="{{ route('gaurd-register') }}"
                                                class="btn btn-primary hoverOpacity">
                                                ĐĂNG KÝ
                                            </button>
                                        </div>
                                        <input id='12ddf903b3f14e8b81687b8f588adb0b' name='g-recaptcha-response'
                                            type='hidden'><noscript
                                            data-src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript><noscript>grecaptcha.ready(function()
                                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                                            'submit'}).then(function(token)
                                            {document.getElementById('12ddf903b3f14e8b81687b8f588adb0b').value =
                                            token;});});</noscript>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="modalChangPw" role="tabpanel"
                                aria-labelledby="modalChangPwTab">
                                <h5 class="text-center">
                                    ĐỔI THÔNG TIN
                                </h5>
                                <div class="register-form-body">
                                    <form accept-charset='UTF-8' action='/account' id='create_customer'
                                        method='post'>
                                        <div class="form-group">
                                            <label for="name">Name*</label>
                                            <input
                                                value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->name : '' }}"
                                                type="text" id="name" class="form-control"
                                                name="customer[first_name]" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email*</label>
                                            <input
                                                value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->email : '' }}"
                                                type="email" id="email" class="form-control"
                                                name="customer[email]" disabled required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone*</label>
                                            <input
                                                value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->phone : '' }}"
                                                type="text" id="phone" class="form-control"
                                                name="customer[phone]" pattern='^\+?\d{0,10}' required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address*</label>
                                            <input
                                                value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->address : '' }}"
                                                type="text" id="address" class="form-control"
                                                name="customer[address]" pattern='^\+?\d{0,10}' required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Mật khẩu*</label>
                                            <input type="password" id="password" class="form-control"
                                                name="customer[password]" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="newpassword">Mật khẩu mới*</label>
                                            <input type="password" id="newpassword" class="form-control"
                                                name="customer[password]" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="renewpassword">Nhập lại Mật khẩu mới*</label>
                                            <input type="password" id="renewpassword" class="form-control"
                                                name="customer[password]" required>
                                        </div>
                                        <p style="color:red" id="message-error-change-info"></p>
                                        <p style="color:green" id="message-success-change-info"></p>

                                        <div class="form-group">
                                            <button type="submit" id="change-info"
                                                class="btn btn-primary hoverOpacity">
                                                THAY ĐỔI THÔNG TIN
                                            </button>
                                        </div>
                                        <input id='12ddf903b3f14e8b81687b8f588adb0b' name='g-recaptcha-response'
                                            type='hidden'><noscript
                                            data-src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript><noscript>grecaptcha.ready(function()
                                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                                            'submit'}).then(function(token)
                                            {document.getElementById('12ddf903b3f14e8b81687b8f588adb0b').value =
                                            token;});});</noscript>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" id="close-modal" class="closeModal"><i class="lni lni-close"></i></a>
        </div>
    </div>
</div>

<div id="sidebarAll">
    <div class="sidebarAllMainCart">
        <div class="sidebarAllHeader">
            <span class="closeSidebar"><i class="lni lni-close"></i></span>
            <span>Giỏ hàng</span>
        </div>
        <div class="sidebarAllBody"></div>
        <div class="sidebarAllFooter">
            <div class="totalPrice">
                <span>Tổng cộng: </span>
                <span></span>
            </div>
            <form action="{{ route('shop-payment') }}" method="get" id="payment-get-view">
                @csrf
                <a href="{{ route('shop-check-guard') }}" id="payment-view" class="mainCartButton hoverOpacity">
                    THANH TOÁN
                </a>
            </form>
        </div>
    </div>
</div>
