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

                            <a href="https://titekvn.com">
                                <img src="{{ asset('logo/logo.png') }}" class="lazyload img-fluid" alt="TITEK" />
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
                        {{-- <div class="wrap-bct mt-3">
                            <a href="http://online.gov.vn/Home/WebDetails/106238"><img width="180"
                                    src="//theme.hstatic.net/200000680123/1001107404/14/logo_bct.png?v=47"
                                    alt="Bộ công thương"></a>
                        </div> --}}
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
                                    <a href="/" title="Tìm kiếm">Tìm kiếm</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản dịch
                                        vụ</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/lien-he" title="Liên hệ">Liên hệ</a>
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
                                    <a href="/pages/phuong-thuc-thanh-toan"
                                        title="Phương thức thanh toán / Đặt hàng">Phương thức thanh toán / Đặt hàng</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/phuong-thuc-giao-hang" title="Phương thức giao hàng">Phương thức
                                        giao hàng</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/chinh-sach-doi-tra-1" title="Chính sách đổi trả">Chính sách đổi
                                        trả</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/chinh-sach-tra-gop" title="Chính sách trả góp">Chính sách trả
                                        góp</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/chinh-sach-bao-hanh" title="Quy định bảo hành">Quy định bảo hành</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo
                                        mật</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua
                                        hàng</a>
                                </li>

                                <li class="item">
                                    <a href="/pages/thu-cu-doi-moi-titek" title="Bảng giá thu cũ đổi mới">Bảng giá thu
                                        cũ đổi mới</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="footerMainColumnItem">
                    <div class="footerMainList">
                        <h4>
                            Thanh toán
                            <i class="lni lni-chevron-right"></i>
                        </h4>
                        <div class="FooterMainListToggle">
                            <div class="footerMainListPayMent">
                                <div class="footerMainListPayMentItem">




                                    <a href="javascript:void(0);">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                            class="lazyload img-fluid"
                                            data-src="//theme.hstatic.net/200000680123/1001107404/14/listpayment_img_1.png?v=47"
                                            alt="Payment" />
                                    </a>





                                    <a href="javascript:void(0);">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                            class="lazyload img-fluid"
                                            data-src="//theme.hstatic.net/200000680123/1001107404/14/listpayment_img_2.png?v=47"
                                            alt="Payment" />
                                    </a>





                                    <a href="javascript:void(0);">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                            class="lazyload img-fluid"
                                            data-src="//theme.hstatic.net/200000680123/1001107404/14/listpayment_img_3.png?v=47"
                                            alt="Payment" />
                                    </a>





                                    <a href="javascript:void(0);">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                            class="lazyload img-fluid"
                                            data-src="//theme.hstatic.net/200000680123/1001107404/14/listpayment_img_4.png?v=47"
                                            alt="Payment" />
                                    </a>





                                    <a href="javascript:void(0);">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                            class="lazyload img-fluid"
                                            data-src="//theme.hstatic.net/200000680123/1001107404/14/listpayment_img_5.png?v=47"
                                            alt="Payment" />
                                    </a>





                                    <a href="javascript:void(0);">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                            class="lazyload img-fluid"
                                            data-src="//theme.hstatic.net/200000680123/1001107404/14/listpayment_img_6.png?v=47"
                                            alt="Payment" />
                                    </a>


















                                </div>
                            </div>
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
                            <div class="fb-page" data-hide-cta="true" data-href="https://www.facebook.com/TiTekPC"
                                data-tabs="timeline" data-width="" data-height="100" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/f1gen" class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/f1gen"></a></blockquote>
                            </div>
                            <div class="newletterSocial">
                                <ul>






                                    <li class="newletterSocialFacebook"><a target="_blank"
                                            href="https://www.facebook.com/TiTekPC"><i
                                                class="lni lni-facebook"></i></a></li>





                                    <li class="newletterSocialYoutube"><a target="_blank"
                                            href="https://www.youtube.com/channel/UC1ttcVA1uIY6fE-K0hMjYHQ"><i
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

                            <a href="https://titekvn.com">
                                <img src="{{ asset('logo/logo.png') }}" class="lazyload img-fluid" alt="QLAH" />
                            </a>

                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="modalLoginTab" data-toggle="pill" href="#modalLogin"
                                role="tab" aria-controls="modalLogin" aria-selected="true">Đăng nhập</a>
                            <a class="nav-link" id="modalForgetTab" data-toggle="pill" href="#modalForget"
                                role="tab" aria-controls="modalForget" aria-selected="false">Quên mật khẩu</a>
                            <a class="nav-link" id="modalRegisterTab" data-toggle="pill" href="#modalRegister"
                                role="tab" aria-controls="modalRegister" aria-selected="false">Đăng ký</a>
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
                                                <label for="recover-email">Name*</label>
                                                <input type="text" id="recover-email"
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
                                        <p id="message-error" style="color:red"></p>
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
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary hoverOpacity">
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
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" id="close-modal" class="closeModal"><i class="lni lni-close"></i></a>
        </div>
    </div>
</div>
<div class="modal fade" id="quickviewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="opacity:0">
            </div>
            <a href="javascript:void(0);" class="closeModal"><i class="lni lni-close"></i></a>
            <div class="loadingWrapper">
                <div class="loadingNew"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="alertError" tabindex="-1" role="dialog" aria-labelledby="accountModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding:25px 0px; text-align:center;">
            </div>
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
            <a href="/cart" class="mainCartButton continue hoverOpacity">
                XEM GIỎ HÀNG
            </a>
            <a href="/checkout" class="mainCartButton hoverOpacity">
                THANH TOÁN
            </a>

        </div>
    </div>
    <div class="sidebarAllMainCompare">
        <div class="sidebarAllHeader">
            <span class="closeSidebar"><i class="lni lni-close"></i></span>
            <span>Danh sách so sánh</span>
        </div>
        <div class="sidebarAllBody"></div>
        <div class="sidebarAllFooter">
            <a href="/pages/so-sanh" class="mainCompareButton hoverOpacity">
                So sánh ngay
            </a>
        </div>
    </div>
    <div class="sidebarAllMainSearch">
        <div class="sidebarAllHeader">
            <span class="closeSidebar"><i class="lni lni-close"></i></span>
            <span>Tìm kiếm</span>
        </div>
        <div class="sidebarAllBody">
            <div class="headerSearchMain">
                <form action="/search" class="headerSearch">
                    <div class="headerSearchMain">
                        <input type="hidden" name="type" value="product" />
                        <input required name="q" maxlength="40" autocomplete="off"
                            class="headerSearchInput searchinput input-search search-input" type="text"
                            size="20" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                    </div>
                    <button type="submit" class="btn-search btn headerSearchButton" aria-label="Tìm kiếm">
                        <i class="lni lni-search-alt"></i>

                    </button>
                </form>
                <div class="headerSmartSearch">
                    <div class="headerSmartSearchResult"></div>
                </div>
            </div>
        </div>
        <div class="sidebarAllFooter">

        </div>
    </div>
    <div class="sidebarAllMainWishlist">
        <div class="sidebarAllHeader">
            <span class="closeSidebar"><i class="lni lni-close"></i></span>
            <span>Yêu thích</span>
        </div>
        <div class="sidebarAllBody">
        </div>
        <div class="sidebarAllFooter">

        </div>
    </div>
    <div class="sidebarAllMainMenu">
        <div class="sidebarAllHeader">
            <span class="closeSidebar"><i class="lni lni-close"></i></span>
            <span>Mục lục</span>
        </div>
        <div class="sidebarAllBody">
            <div class="headerSearchMain">
                <form action="/search" class="headerSearch">
                    <div class="headerSearchMain">
                        <input type="hidden" name="type" value="product" />
                        <input required name="q" maxlength="40" autocomplete="off"
                            class="headerSearchInput searchinput input-search search-input" type="text"
                            size="20" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                    </div>
                    <button type="submit" class="btn-search btn headerSearchButton" aria-label="Tìm kiếm">
                        <i class="lni lni-search-alt"></i>
                    </button>
                </form>
                <div class="headerSmartSearch">
                    <div class="headerSmartSearchResult"></div>
                </div>
            </div>
            <nav class="mainNav">
                <ul class="menuMainList">







                    <li class=" hasChild">
                        <a href="/collections/pc-build-san" title="PC">
                            PC
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/titek-fire" title="TITEK FIRE">
                                        TITEK FIRE <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-fire-1650"
                                                title="TTK FIRE - 1650">
                                                TTK FIRE - 1650
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-fire-1650-v2"
                                                title="TTK FIRE - 1650 v2">
                                                TTK FIRE - 1650 v2
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-fire-3050"
                                                title="TTK FIRE - 3050">
                                                TTK FIRE - 3050
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-fire-3060"
                                                title="TTK FIRE - 3060">
                                                TTK FIRE - 3060
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/ttk-water" title="TITEK WATER">
                                        TITEK WATER <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-water-a3060"
                                                title="TTK WATER - A3060">
                                                TTK WATER - A3060
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-water-b3060-ti"
                                                title="TTK WATER - B3060 TI">
                                                TTK WATER - B3060 TI
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-water-b3060-ti-w"
                                                title="TTK WATER - B3060 TI W">
                                                TTK WATER - B3060 TI W
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-water-c3060-ti-w"
                                                title="TTK WATER - C3060 TI W">
                                                TTK WATER - C3060 TI W
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://titekvn.com/products/ttk-water-4070"
                                                title="TTK WATER - B4070">
                                                TTK WATER - B4070
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem ">
                                    <a href="/collections/pc-build-san" title="TITEK EARTH">
                                        TITEK EARTH
                                    </a>
                                </div>



                                <div class="subMenuItem ">
                                    <a href="/collections/pc-build-san" title="TITEK AIR">
                                        TITEK AIR
                                    </a>
                                </div>



                                <div class="subMenuItem ">
                                    <a href="/collections/mini-pc" title="TITEK Mini PC">
                                        TITEK Mini PC
                                    </a>
                                </div>


                            </div>
                        </div>
                    </li>





<<<<<<< HEAD
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="modalLoginTab" data-toggle="pill" href="#modalLogin" role="tab" aria-controls="modalLogin" aria-selected="true">Đăng nhập</a>
                                <a class="nav-link" id="modalForgetTab" data-toggle="pill" href="#modalForget" role="tab" aria-controls="modalForget" aria-selected="false">Quên mật khẩu</a>
                                <a class="nav-link" id="modalRegisterTab" data-toggle="pill" href="#modalRegister" role="tab" aria-controls="modalRegister" aria-selected="false">Đăng ký</a>
                                @if (Auth::guard('customers')->user() != null)
                                <a class="nav-link" href="{{route('gaurd-logout')}}">Đăng xuất</a>
                                @endif
=======



                    <li class=" hasChild">
                        <a href="/collections/linh-kien-pc" title="Linh Kiện PC">
                            Linh Kiện PC
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/vga-card-man-hinh" title="VGA - Card màn hình">
                                        VGA - Card màn hình <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/rtx-series-4000/rtx4000" title="RTX Series 4000">
                                                RTX Series 4000
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/rtx-series-3000/RTX3000" title="RTX Series 3000">
                                                RTX Series 3000
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/gtx-1660-rtx-2000-series/gtx1660"
                                                title="GTX 1660 - RTX 2060">
                                                GTX 1660 - RTX 2060
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/gtx-1650/gtx1650" title="GTX 1650 - GTX 1650 Super">
                                                GTX 1650 - GTX 1650 Super
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/vga-intel" title="VGA INTEL">
                                                VGA INTEL
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/rx-series" title="RX Series">
                                                RX Series
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/mainboard" title="Mainboard">
                                        Mainboard <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/mainboard-h510" title="H510">
                                                H510
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/mainboard-h610" title="H610">
                                                H610
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/mainboard-b660" title="B660">
                                                B660
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/mainboard-z690" title="Z690">
                                                Z690
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/mainboard-b760" title="B760 ( Mới )">
                                                B760 ( Mới )
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/mainboard-z790" title="Z790 ( Mới )">
                                                Z790 ( Mới )
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/cpu" title="CPU">
                                        CPU <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/intel-core-i3" title="Intel Core i3">
                                                Intel Core i3
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/intel-core-i5" title="Intel Core i5">
                                                Intel Core i5
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/intel-core-i7" title="Intel Core i7">
                                                Intel Core i7
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/intel-core-i9" title="Intel Core i9">
                                                Intel Core i9
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/ram" title="RAM">
                                        RAM <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ram-8g-ddr4" title="RAM 8G - DDR4">
                                                RAM 8G - DDR4
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ram-16g-ddr4" title="RAM 16G - DDR4">
                                                RAM 16G - DDR4
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ram-ddr5" title="RAM DDR5">
                                                RAM DDR5
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ram-sodimm-laptop/ramlap" title="RAM SODIMM LAPTOP">
                                                RAM SODIMM LAPTOP
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/ssd-hdd" title="SSD - HDD">
                                        SSD - HDD <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ssd-m-2" title="SSD M.2 Pcie Gen 4">
                                                SSD M.2 Pcie Gen 4
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ssd-m-2-tren-1tb" title="SSD M.2 trên 1TB">
                                                SSD M.2 trên 1TB
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ssd-2-5-sata" title="SSD 2.5 Sata">
                                                SSD 2.5 Sata
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/hdd" title="HDD">
                                                HDD
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/psu" title="PSU">
                                        PSU <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/psu-400w-500w" title="Nguồn 400W-500W">
                                                Nguồn 400W-500W
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/psu-550w-650w" title="Nguồn 550W-650W">
                                                Nguồn 550W-650W
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/psu-750w-850w" title="Nguồn 750W-850W">
                                                Nguồn 750W-850W
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/psu-tren-1000w" title="Nguồn trên 1000W">
                                                Nguồn trên 1000W
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/tan-nhiet-cooler-fan-rgb"
                                        title="Tản Nhiệt - Cooler - Fan RGB">
                                        Tản Nhiệt - Cooler - Fan RGB <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/tan-nhiet-khi" title="Tản nhiệt khí">
                                                Tản nhiệt khí
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tan-nhiet-aio-240mm/240mm"
                                                title="Tản nhiệt AIO 240mm">
                                                Tản nhiệt AIO 240mm
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tan-nhiet-aio-280mm/280mm"
                                                title="Tản nhiệt AIO 280mm">
                                                Tản nhiệt AIO 280mm
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tan-nhiet-aio-360mm/360mm"
                                                title="Tản nhiệt AIO 360mm">
                                                Tản nhiệt AIO 360mm
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/fan-rgb" title="Fan RGB">
                                                Fan RGB
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/case" title="CASE">
                                        CASE <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/case-deepcool" title="Case Deepcool">
                                                Case Deepcool
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/case-montech" title="Case Montech">
                                                Case Montech
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/case-nzxt" title="Case NZXT">
                                                Case NZXT
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/case-duoi-1-trieu/duoi1tr"
                                                title="Case dưới 1 triệu">
                                                Case dưới 1 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/case-tu-1-trieu-2-trieu/tu1trden2tr"
                                                title="Case từ 1 triệu - 2 triệu">
                                                Case từ 1 triệu - 2 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/case-tren-2-trieu/tren2tr"
                                                title="Case trên 2 triệu">
                                                Case trên 2 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>


>>>>>>> 4bde28f2c2bfcfdf4f775c138c709bbeb74dbd1a
                            </div>
                        </div>
                    </li>

<<<<<<< HEAD
                                        <p id="message-login" style="color:red"></p>
                                        <form accept-charset='UTF-8' action='/account/login' id='customer_login' method='post'>
                                            <input name='form_type' type='hidden' value='customer_login'>
                                            <input name='utf8' type='hidden' value='✓'>

                                            @if (Auth::guard('customers')->user() != null)
                                                <div class="form-group">
                                                    <label for="recover-email">Name*</label>
                                                    <input type="text" id="recover-email" value="{{Auth::guard('customers')->user()->name}}" class="form-control" disabled name="email" required>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="login-email">Email*</label>
                                                <input type="email" id="login-email" value="<?= Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->email : '' ?>"
                                                  <?= Auth::guard('customers')->user() ? 'disabled' : '' ?> class="form-control" name="customer[email]" required>
                                            </div>
                                            @if (!Auth::guard('customers')->user() != null)
                                                <div class="form-group">
                                                    <label for="login-password">Mật khẩu*</label>
                                                    <input type="password" id="login-password" class="form-control" name="customer[password]" required>
                                                </div>
                                            @endif
                                            <p id="message-error" style="color:red"></p>
                                            <div class="form-group">
                                                <button <?= Auth::guard('customers')->user() != null ? 'disabled' : '' ?> type="submit" id="login-customer" data-href="{{route('gaurd-login')}}" class="btn btn-primary hoverOpacity">
                                                    ĐĂNG NHẬP
                                                </button>
                                            </div>
=======



>>>>>>> 4bde28f2c2bfcfdf4f775c138c709bbeb74dbd1a




                    <li class=" hasChild">
                        <a href="/collections/man-hinh" title="Màn Hình">
                            Màn Hình
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/man-hinh" title="Thương hiệu">
                                        Thương hiệu <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/man-hinh-lg" title="LG">
                                                LG
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-viewsonic" title="Viewsonic">
                                                Viewsonic
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-galax" title="Galax">
                                                Galax
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-aoc" title="AOC">
                                                AOC
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-dell" title="Dell">
                                                Dell
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-gigabyte" title="Gigabyte">
                                                Gigabyte
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-asus" title="Asus">
                                                Asus
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-benq" title="BenQ">
                                                BenQ
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/man-hinh" title="Kích thước">
                                        Kích thước <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/man-hinh-24" title="Màn hình 24" ">
         Màn hình 24" </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-27" title="Màn hình 27" ">
         Màn hình 27" </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-32" title="Màn hình 32" ">
         Màn hình 32" </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/man-hinh" title="Tần số quét">
                                        Tần số quét <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/man-hinh-60hz" title="60Hz">
                                                60Hz
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-75hz" title="75Hz">
                                                75Hz
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-144hz" title="144Hz">
                                                144Hz
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-240hz" title="240Hz">
                                                240Hz
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-360hz" title="360Hz">
                                                360Hz
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/man-hinh" title="Giá tiền">
                                        Giá tiền <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/man-hinh/duoi5tr" title="Dưới 5 triệu">
                                                Dưới 5 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh/tu5trden10tr"
                                                title="Từ 5 triệu - 10 triệu">
                                                Từ 5 triệu - 10 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh/tu10trden20tr"
                                                title="Từ 10 triệu - 20 triệu">
                                                Từ 10 triệu - 20 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh/tu20trden30tr"
                                                title="Từ 20 triệu - 30 triệu">
                                                Từ 20 triệu - 30 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh/tren30tr" title="Trên 30 triệu">
                                                Trên 30 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem ">
                                    <a href="/collections/man-hinh-di-dong/mhdd" title="Màn hình di động">
                                        Màn hình di động
                                    </a>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/man-hinh" title="Độ phân giải">
                                        Độ phân giải <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/man-2k" title="Màn 2K">
                                                Màn 2K
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/man-hinh-4k" title="Màn 4K">
                                                Màn 4K
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>


<<<<<<< HEAD
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
                <form action="{{route('shop-payment')}}" method="get" id="payment-get-view">
                    @csrf
                    <a href="{{route('shop-check-guard')}}" id="payment-view" class="mainCartButton hoverOpacity">
                        THANH TOÁN
                    </a>
                </form>
            </div>
        </div>
        <div class="sidebarAllMainCompare">
            <div class="sidebarAllHeader">
                <span class="closeSidebar"><i class="lni lni-close"></i></span>
                <span>Danh sách so sánh</span>
            </div>
            <div class="sidebarAllBody"></div>
            <div class="sidebarAllFooter">
                <a href="/pages/so-sanh" class="mainCompareButton hoverOpacity">
                    So sánh ngay
                </a>
            </div>
        </div>
        <div class="sidebarAllMainSearch">
            <div class="sidebarAllHeader">
                <span class="closeSidebar"><i class="lni lni-close"></i></span>
                <span>Tìm kiếm</span>
            </div>
            <div class="sidebarAllBody">
                <div class="headerSearchMain">
                    <form action="/search" class="headerSearch">
                        <div class="headerSearchMain">
                            <input type="hidden" name="type" value="product" />
                            <input required name="q" maxlength="40" autocomplete="off" class="headerSearchInput searchinput input-search search-input" type="text" size="20" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
=======






                    <li class=" hasChild">
                        <a href="/collections/ban-phim" title="Bàn Phím">
                            Bàn Phím
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/gear" title="Thuơng hiệu">
                                        Thuơng hiệu <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ban-phim-akko" title="Akko">
                                                Akko
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-logitech" title="Logitech">
                                                Logitech
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-razer" title="Razer">
                                                Razer
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-corsair" title="Corsair">
                                                Corsair
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-fl-esports" title="FL-Esports">
                                                FL-Esports
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-e-dra" title="E-Dra">
                                                E-Dra
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-dareu" title="DareU">
                                                DareU
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-damoshark" title="Darmoshark">
                                                Darmoshark
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-steelseries" title="Steelseries">
                                                Steelseries
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-cidoo" title="Cidoo">
                                                Cidoo
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/gear" title="Giá tiền">
                                        Giá tiền <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ban-phim/duoi1tr" title="Dưới 1 triệu">
                                                Dưới 1 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim/tu1trden2tr" title="Từ 1 triệu - 2 triệu">
                                                Từ 1 triệu - 2 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim/tu2trden3tr" title="Từ 2 triệu - 3 triệu">
                                                Từ 2 triệu - 3 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim/tu3trden4tr" title="Từ 3 triệu - 4 triệu">
                                                Từ 3 triệu - 4 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim/tren4tr" title="Trên 4 triệu">
                                                Trên 4 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/ban-phim-akko" title="Thương hiệu Akko">
                                        Thương hiệu Akko <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/ACR" title="ACR Series">
                                                ACR Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/3068" title="Akko 3068 Series">
                                                Akko 3068 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/3087" title="Akko 3087 Series">
                                                Akko 3087 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/3098" title="Akko 3098 Series">
                                                Akko 3098 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/3108" title="Akko 3108 Series">
                                                Akko 3108 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/5075" title="Akko 5075 Series">
                                                Akko 5075 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/5087" title="Akko 5087 Series">
                                                Akko 5087 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ban-phim-akko/Akko-Mod" title="Akko Mod Series">
                                                Akko Mod Series
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
>>>>>>> 4bde28f2c2bfcfdf4f775c138c709bbeb74dbd1a
                        </div>
                    </li>








                    <li class=" hasChild">
                        <a href="/collections/chuot" title="Chuột + Lót Chuột">
                            Chuột + Lót Chuột
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/chuot" title="Thuơng Hiệu">
                                        Thuơng Hiệu <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/chuot-akko" title="Akko">
                                                Akko
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-logitech" title="Logitech">
                                                Logitech
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-razer" title="Razer">
                                                Razer
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-corsair" title="Corsair">
                                                Corsair
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-fl-esports" title="FL-Esport">
                                                FL-Esport
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-e-dra" title="E-Dra">
                                                E-Dra
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-dareu" title="DareU">
                                                DareU
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-damoshark" title="Darmoshark">
                                                Darmoshark
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-pulsar-1" title="Pulsar">
                                                Pulsar
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-steelseries" title="Steelseries">
                                                Steelseries
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot-endgame-gear" title="Endgame Gear">
                                                Endgame Gear
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/gear" title="Giá tiền">
                                        Giá tiền <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/chuot/duoi1tr" title="Dưới 1 triệu">
                                                Dưới 1 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot/tu1trden2tr" title="Từ 1 triệu - 2 triệu">
                                                Từ 1 triệu - 2 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot/tu2trden3tr" title="Từ 2 triệu - 3 triệu">
                                                Từ 2 triệu - 3 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot/tu3trden4tr" title="Từ 3 triệu - 4 triệu">
                                                Từ 3 triệu - 4 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/chuot/tren4tr" title="Trên 4 triệu">
                                                Trên 4 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>








                    <li class=" hasChild">
                        <a href="/collections/tai-nghe" title="Tai nghe - Loa">
                            Tai nghe - Loa
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/tai-nghe" title="Thương hiệu">
                                        Thương hiệu <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/tai-nghe-logitech" title="Logitech">
                                                Logitech
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe-hyperx" title="HyperX">
                                                HyperX
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe-razer" title="Razer">
                                                Razer
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe-corsair" title="Corsair">
                                                Corsair
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe-asus" title="Asus">
                                                Asus
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe-steelseries" title="Steelseries">
                                                Steelseries
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe-dareu" title="DareU">
                                                DareU
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/tai-nghe" title="Giá tiền">
                                        Giá tiền <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/tai-nghe/duoi1tr" title="Dưới 1 triệu">
                                                Dưới 1 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe/tu1trden2tr" title="Từ 1 triệu - 2 triệu">
                                                Từ 1 triệu - 2 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe" title="Từ 2 triệu - 3 triệu">
                                                Từ 2 triệu - 3 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe/tu3trden4tr" title="Từ 3 triệu - 4 triệu">
                                                Từ 3 triệu - 4 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/tai-nghe/tren4tr" title="Trên 4 triệu">
                                                Trên 4 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>








                    <li class=" hasChild">
                        <a href="/collections/laptop" title="Laptop">
                            Laptop
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/laptop" title="Thương hiệu">
                                        Thương hiệu <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/laptop-asus" title="Asus">
                                                Asus
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-lenovo" title="Lenovo">
                                                Lenovo
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-msi" title="MSI">
                                                MSI
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-dell" title="Dell">
                                                Dell
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-acer" title="Acer">
                                                Acer
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-gigabyte" title="Gigabyte">
                                                Gigabyte
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-hp" title="HP">
                                                HP
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop-lg" title="LG">
                                                LG
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/laptop" title="Giá tiền">
                                        Giá tiền <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/laptop/duoi20tr" title="Dưới 20 triệu">
                                                Dưới 20 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop/tu20trden25tr"
                                                title="Từ 20 triệu - 25 triệu">
                                                Từ 20 triệu - 25 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop/tu25trden30tr"
                                                title="Từ 25 triệu - 30 triệu">
                                                Từ 25 triệu - 30 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop/tren30tr" title="Trên 30 triệu">
                                                Trên 30 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/laptop" title="Card đồ hoạ">
                                        Card đồ hoạ <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/laptop/1650" title="1650">
                                                1650
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop/rtx3000" title="3000 Series">
                                                3000 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop/rtx4000" title="4000 Series">
                                                4000 Series
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/laptop/AMDRX" title="AMD RX">
                                                AMD RX
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>








                    <li class=" hasChild">
                        <a href="/collections/ghe-ban" title="Ghế - Bàn">
                            Ghế - Bàn
                            <i class="lni lni-chevron-right"></i>
                        </a>
                        <div class="subMenuTwo">
                            <div class="subMenuTwoColumOne haveThree border-right-new">


                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/ghe-ban" title="Thương hiệu gaming">
                                        Thương hiệu gaming <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ghe-corsair" title="Corsair">
                                                Corsair
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-warrior" title="Warrior">
                                                Warrior
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-dxracer" title="DXRacer">
                                                DXRacer
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-e-dra" title="E-Dra">
                                                E-Dra
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-cooler-master" title="Cooler Master">
                                                Cooler Master
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-akracing" title="Akracing">
                                                Akracing
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild ">
                                    <a href="/collections/ghe-ban" title="Thương hiệu CTH">
                                        Thương hiệu CTH <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ghe-sihoo" title="Sihoo">
                                                Sihoo
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-e-dra/cth" title="E-Dra">
                                                E-Dra
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-warrior/cth" title="Warrior">
                                                Warrior
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-epione" title="Epione">
                                                Epione
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild active">
                                    <a href="/" title="Kiểu Ghế">
                                        Kiểu Ghế <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ghe-ban/GMC" title="Ghế Gaming">
                                                Ghế Gaming
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-ban/CTH" title="Ghế Công Thái Học">
                                                Ghế Công Thái Học
                                            </a>
                                        </li>

                                    </ul>
                                </div>



                                <div class="subMenuItem hasChild active">
                                    <a href="/" title="Giá Tiền">
                                        Giá Tiền <i class="lni lni-chevron-right"></i>
                                    </a>
                                    <ul class="subMenuThree">

                                        <li class="">
                                            <a href="/collections/ghe-ban/duoi5tr" title="Dưới 5 triệu">
                                                Dưới 5 triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-ban/tu5trden10tr" title="5 Triệu - 10 Triệu">
                                                5 Triệu - 10 Triệu
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/collections/ghe-ban/tren10tr" title="Trên 10 triệu">
                                                Trên 10 triệu
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>



                    <li class="">
                        <a href="/collections/phu-kien" title="Phụ kiện - Đồ chơi công nghệ">
                            Phụ kiện - Đồ chơi công nghệ
                        </a>
                    </li>


                </ul>
            </nav>






        </div>
        <div class="sidebarAllFooter">

        </div>
    </div>

</div>

<div class="overplayAll"></div>
<div class="back-to-top">
    <a href="javascript:void(0);" id="js-pagetop" class="l-gh__scrollnav-pagetop">
        <div class="l-gh__scrollnav-pagetop-arr">
            <div class="head"></div>
        </div>
        <div class="text">TOP</div>
    </a>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

{{-- <div class="modal modal-popupContact popupBanner" tabindex="-1" role="dialog" id="popup-contact">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-wrapper-contact">
                <button type="button" class="close close-popup-contact">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                            style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                            <g>
                                <path
                                    d="M294.111,256.001L504.109,46.003c10.523-10.524,10.523-27.586,0-38.109c-10.524-10.524-27.587-10.524-38.11,0L256,217.892    L46.002,7.894c-10.524-10.524-27.586-10.524-38.109,0s-10.524,27.586,0,38.109l209.998,209.998L7.893,465.999    c-10.524,10.524-10.524,27.586,0,38.109c10.524,10.524,27.586,10.523,38.109,0L256,294.11l209.997,209.998    c10.524,10.524,27.587,10.523,38.11,0c10.523-10.524,10.523-27.586,0-38.109L294.111,256.001z" />
                            </g>
                        </svg>
                    </span>
                </button>
                <a class="linkbanner-popup-contact"
                    href="https://www.facebook.com/TiTekPC/posts/pfbid02hU82937VUrykFRXwx8MvayUGCtFMbX7ys5BvNTApduus8tmrbzqTDeYM2D8EaQ6jl"
                    title="Các ưu đãi của chúng tôi">
                    <img src="https://file.hstatic.net/200000680123/file/backtoschool_01_baddbef465644e6ebae8feb96cf62129.jpg"
                        alt="Các ưu đãi của chúng tôi">
                </a>
            </div>

        </div>
    </div>
</div> --}}


<div class="addThis_listSharing">
    <div class="listSharing_action">
        <button type="button" class="addThis_close" data-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g transform="translate(-1341.000000, -90.000000)">
                        <g transform="translate(1341.000000, 90.000000)">
                            <polygon
                                points="19 6.4 17.6 5 12 10.6 6.4 5 5 6.4 10.6 12 5 17.6 6.4 19 12 13.4 17.6 19 19 17.6 13.4 12">
                            </polygon>
                        </g>
                    </g>
                </g>
            </svg>
        </button>
        <ul class="addThis_listing">
            <li class="addThis_item">
                <a class="addThis_item--icon" href="#" rel="nofollow" aria-label="zalo" target="_blank">
                    <img width="22" class="" alt="Icon-Zalo"
                        src="https://file.hstatic.net/200000259495/file/zalo_d9dc3417eb744b91a44643f29b8c7161.svg" />
                    <span class="tooltip-text">Zalo</span>
                </a>
            </li>
            <li class="addThis_item">
                <a class="addThis_item--icon" href="#" target="_blank" rel="nofollow noreferrer"
                    aria-label="zalo">
                    <img width="22" class="" alt="Icon-Messager"
                        src="https://file.hstatic.net/200000259495/file/messager_208d7389c4ac46b5a01afad457684cd6.svg" />
                    <span class="tooltip-text">Messenger</span>
                </a>
            </li>
            <li class="addThis_item">
                <a class="addThis_item--icon" href="#" aria-label="Youtube">
                    <img width="22" class="" alt="Icon-Youtube"
                        src="https://file.hstatic.net/200000259495/file/youtube_479e81022bcb432f89376b2fea8f08ef.svg" />
                    <span class="tooltip-text">Youtube</span>
                </a>
            </li>
            <li class="addThis_item">
                <a class="addThis_item--icon" href="#">
                    <img width="22" class="" alt="Icon-Tiktok"
                        src="https://file.hstatic.net/200000259495/file/tik-tok_b5d2fcfc430f4022b3af5051c2f54cfd.svg" />
                    <span class="tooltip-text">Tiktok</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="listSharing_overlay"></div>
</div>

<div class="addThis_iconContact">
    <div class="box-item item-contact">
        <div class="svgico">
            <svg width="34" height="35" viewBox="0 0 34 35" xmlns="http://www.w3.org/2000/svg">

                <path
                    d="M27.2212 0H10.7532C9.76511 0 8.97461 0.834345 8.97461 1.82643V12.334C8.97461 13.3487 9.78701 14.1604 10.7532 14.1604H22.1051L24.6741 16.8211C24.7839 16.9338 24.9157 17.0015 25.0693 17.0015C25.3768 17.0015 25.6402 16.7535 25.6402 16.4153V14.1604H27.2212C28.2092 14.1604 28.9997 13.3261 28.9997 12.334V1.82643C28.9997 0.811779 28.1873 0 27.2212 0ZM13.2783 9.04195C12.378 9.04195 11.6315 8.2753 11.6315 7.35077C11.6315 6.42631 12.378 5.65966 13.2783 5.65966C14.1785 5.65966 14.925 6.42631 14.925 7.35077C14.925 8.2753 14.2005 9.04195 13.2783 9.04195ZM19.0531 9.04195C18.1528 9.04195 17.4062 8.2753 17.4062 7.35077C17.4062 6.42631 18.1528 5.65966 19.0531 5.65966C19.9533 5.65966 20.6998 6.42631 20.6998 7.35077C20.6998 8.2753 19.9533 9.04195 19.0531 9.04195ZM24.8059 9.04195C23.9056 9.04195 23.1591 8.2753 23.1591 7.35077C23.1591 6.42631 23.9056 5.65966 24.8059 5.65966C25.7061 5.65966 26.4526 6.42631 26.4526 7.35077C26.4526 8.2753 25.7061 9.04195 24.8059 9.04195Z">
                </path>
                <path
                    d="M7.9649 12.3782V8.79297H6.16437C5.52762 8.79297 5.00066 9.33418 5.00066 9.98807V16.8878C4.97869 17.5868 5.50564 18.128 6.16437 18.128H7.19637V19.6162C7.19637 19.8192 7.37202 19.9995 7.56964 19.9995C7.67944 19.9995 7.76727 19.9544 7.83312 19.8868L9.52385 18.1505H16.9894C17.6261 18.1505 18.1531 17.6094 18.1531 16.9555V15.2418H10.7535C9.2165 15.2418 7.9649 13.9566 7.9649 12.3782Z">
                </path>
            </svg>
            <span class="svgico--close">
                <svg viewBox="0 0 19 19" role="presentation">
                    <path
                        d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                        fill-rule="evenodd"></path>
                </svg> </span>
        </div>
    </div>
</div>
