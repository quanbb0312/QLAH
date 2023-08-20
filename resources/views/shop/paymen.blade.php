<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
    <title>
        QLAH - Thanh toán đơn hàng
    </title>
    <link rel="stylesheet" href="../../user/payment.css" type="text/css">
    <meta name="description" content="QLAH - Thanh toán đơn hàng">
    <link href="//theme.hstatic.net/200000680123/1001107404/14/check_out.css?v=47" rel="stylesheet" type="text/css"
        media="all">
    <script src="//hstatic.net/0/0/global/jquery.min.js" type="text/javascript"></script>
    <script src="//hstatic.net/0/0/global/api.jquery.js" type="text/javascript"></script>
    <script src="//hstatic.net/0/0/global/jquery.validate.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <link rel="stylesheet" href="{{asset('user/css/payment-main.css')}}" type="text/css">
    <script src="{{asset('user/js/payment-header.js')}}"></script>
    <script defer="" src="https://stats.hstatic.net/beacon.min.js" hrv-beacon-t="200000680123"></script>
    <script>
        window.HaravanAnalytics.ga4 = "G-24C1XZ9BDQ";
        window.HaravanAnalytics.enhancedEcommercev4 = true;
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-24C1XZ9BDQ');
    </script>
</head>

<body style="">
    <div class="content">
        <div class="wrap">
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-product-list"
                                data-order-summary-section="line-items">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalAll = 0;
                                            $format = new NumberFormatter('vi-VN', NumberFormatter::CURRENCY);
                                        @endphp
                                        @foreach ($carts as $key => $product)
                                            @php
                                                $total = $product['price'] * $product['quantity'];
                                                $totalAll += $total;
                                            @endphp
                                            <tr class="product" data-product-id="{{ $key }}"
                                                data-variant-id="{{ $key }}">
                                                <td class="product-image">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail-wrapper">
                                                            <img class="product-thumbnail-image"
                                                                alt="{{ $product['nameVi'] }}"
                                                                src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_small.png">
                                                        </div>
                                                        <span class="product-thumbnail-quantity"
                                                            aria-hidden="true">{{ $product['quantity'] }}</span>
                                                    </div>
                                                </td>
                                                <td class="product-description">
                                                    <span
                                                        class="product-description-name order-summary-emphasis">{{ $product['nameVi'] }}</span>

                                                    <span class="product-description-variant order-summary-small-text">
                                                        {{ $product['nameVi'] }}
                                                    </span>

                                                </td>
                                                <td class="product-quantity visually-hidden">{{ $product['quantity'] }}
                                                </td>
                                                <td class="product-price">
                                                    <span
                                                        class="order-summary-emphasis">{{ $format->formatCurrency($total, 'VND') }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary-section order-summary-section-discount"
                                data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Discount
                                                        Code</label>
                                                    <input placeholder="Discount Code" class="field-input"
                                                        data-discount-field="true" autocomplete="false"
                                                        autocapitalize="off" spellcheck="false" size="30"
                                                        type="text" id="discount.code" name="discount.code"
                                                        value="">
                                                </div>
                                                <button type="submit"
                                                    class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Use</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="order-summary-section order-summary-section-total-lines payment-lines"
                                data-order-summary-section="payment-lines">
                                <table class="total-line-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">Provisional</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis"
                                                    data-checkout-subtotal-price-target="{{ $totalAll }}">
                                                    {{ $format->formatCurrency($totalAll, 'VND') }}
                                                </span>
                                            </td>
                                        </tr>


                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">Transport fee</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis"
                                                    data-checkout-total-shipping-target="0">

                                                    —

                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                        <tr class="total-line">
                                            <td class="total-line-name payment-due-label">
                                                <span class="payment-due-label-total">Total</span>
                                            </td>
                                            <td class="total-line-name payment-due">
                                                <span class="payment-due-currency">VND</span>
                                                <span class="payment-due-price"
                                                    data-checkout-payment-due-target="{{ $totalAll }}">
                                                    {{ number_format($totalAll) }}
                                                </span>
                                                <span class="checkout_version" display:none=""
                                                    data_checkout_version="0">
                                                </span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-header">
                    <a href="{{ route('dashboad') }}" class="logo">
                        <h1 class="logo-text">QLAH</h1>
                    </a>
                    <style>
                    </style>
                </div>
                <div class="main-content">
                    <script>
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                    </script>
                    <form action="{{ route('shop-check-out') }}" id="shop-check-out" method="post">
                        @csrf
                        <div class="step">
                            <div class="step-sections " step="1">
                                <div class="section">
                                    <div class="section-header">
                                        <h2 class="section-title">Shipment Details</h2>
                                    </div>
                                    <div class="section-content section-customer-information no-mb">

                                        <input name="utf8" type="hidden" value="✓">
                                        <div class="inventory_location_data">
                                            <input name="customer_shipping_country" type="hidden" value="241">
                                            <input name="customer_shipping_province" type="hidden" value="">
                                            <input name="customer_shipping_district" type="hidden" value="">
                                            <input name="customer_shipping_ward" type="hidden" value="">
                                        </div>
                                        <div class="fieldset">
                                            <div class="field field-required  ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label"
                                                        for="billing_address_full_name">Name</label>
                                                    <input
                                                        value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->name : '' }}"
                                                        placeholder="Name" autocapitalize="off" spellcheck="false"
                                                        class="field-input" size="30" type="text"
                                                        id="billing_address_full_name" name="name" value=""
                                                        autocomplete="false" required>
                                                </div>
                                            </div>
                                            <div class="field  field-two-thirds  ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="checkout_user_email">Email</label>
                                                    <input
                                                        value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->email : '' }}"
                                                        autocomplete="false" placeholder="Email" autocapitalize="off"
                                                        spellcheck="false" class="field-input" size="30"
                                                        type="email" id="checkout_user_email" name="email"
                                                        value="" required>
                                                </div>
                                            </div>
                                            <div class="field field-required field-third  ">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label"
                                                        for="billing_address_phone">Phone</label>
                                                    <input
                                                        value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->phone : '' }}"
                                                        autocomplete="false" placeholder="Phone" autocapitalize="off"
                                                        spellcheck="false" class="field-input" size="30"
                                                        maxlength="15" type="tel" id="billing_address_phone"
                                                        name="phone" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-content">
                                        <div class="fieldset">
                                            <input name="utf8" type="hidden" value="✓">
                                            <div class="content-box mt0">

                                                <div id="form_update_location_customer_shipping"
                                                    class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary "
                                                    for="customer_pick_at_location_false">
                                                    <input name="utf8" type="hidden" value="✓">
                                                    <div class="order-checkout__loading--box">
                                                        <div class="order-checkout__loading--circle"></div>
                                                    </div>
                                                    <div class="field field-required  ">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label"
                                                                for="billing_address_address1">Address</label>
                                                            <input
                                                                value="{{ Auth::guard('customers')->user() != null ? Auth::guard('customers')->user()->address : '' }}"
                                                                placeholder="Address" autocapitalize="off"
                                                                spellcheck="false" class="field-input" size="30"
                                                                type="text" id="billing_address_address"
                                                                name="address" value="" required>
                                                        </div>
                                                    </div>

                                                    <div class="field field-required  ">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="billing_note">Note</label>
                                                            <input placeholder="Note" autocapitalize="off"
                                                                spellcheck="false" class="field-input" size="30"
                                                                type="text" id="billing_note" name="note"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="change_pick_location_or_shipping">
                                    </div>
                                </div>
                            </div>
                            <div class="step-footer" id="step-footer-checkout">
                                <button data-href="{{ route('shop-check-out') }}" type="submit"
                                    id="button-checkout" class=" btn">
                                    <span class="btn-content">Check Out</span>
                                </button>
                                <a class="step-footer-previous-link" href="{{ route('payment-history') }}">
                                    Order History
                                </a>
                            </div>
                        </div>
                    </form>
                    <div style="margin:20px; color: #0b5348; background-color: #d1f5f0; border-color: #bbf1e9">
                        <p id="message-checkout"></p>
                    </div>
                    <div style="margin:20px; color: crimson; background-color: #f1f1f1; border-color: #bbf1e9">
                        <p id="message-error"></p>
                    </div>
                </div>
                <div class="hrv-coupons-popup">
                    <div class="hrv-title-coupons-popup">
                        <p>Chọn giảm giá <span class="count-coupons"></span></p>
                        <div class="hrv-coupons-close-popup">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.1663 2.4785L15.5213 0.833496L8.99968 7.35516L2.47801 0.833496L0.833008 2.4785L7.35468 9.00016L0.833008 15.5218L2.47801 17.1668L8.99968 10.6452L15.5213 17.1668L17.1663 15.5218L10.6447 9.00016L17.1663 2.4785Z"
                                    fill="#424242"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="hrv-content-coupons-code">
                        <h3 class="coupon_heading">Discount Code</h3>
                        <div class="hrv-discount-code-web">
                        </div>
                        <div class="hrv-discount-code-external">

                        </div>
                    </div>
                </div>
                <div class="hrv-coupons-popup-site-overlay"></div>
                <div class="main-footer footer-powered-by">Powered by Haravan</div>
            </div>
        </div>

    </div>
<script src="{{asset('user/js/payment-footer.js')}}"></script>
</body>

</html>
