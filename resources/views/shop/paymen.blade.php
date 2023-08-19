<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
    {{-- <link rel="shortcut icon" href="//theme.hstatic.net/200000680123/1001107404/14/favicon.png?v=47" type="image/png"> --}}
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
    <script type="text/javascript">
        var parseQueryString = function(url) {

            var str = url;
            var objURL = {};

            str.replace(
                new RegExp("([^?=&]+)(=([^&]*))?", "g"),
                function($0, $1, $2, $3) {

                    if ($3 != undefined && $3 != null)
                        objURL[$1] = decodeURIComponent($3);
                    else
                        objURL[$1] = $3;
                });

            return objURL;
        };
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                var stepCheckout = parseInt($('.step-sections').attr('step'));
                if (stepCheckout === 1) {
                    var flagVal = 0;
                    $('body').on('change', '#stored_addresses', function() {
                        flagVal = $(this).val();
                    });
                    $('body').on('click', '.step-footer-continue-btn', function() {
                        $(document).ajaxComplete(function(event, xhr, settings) {

                            if (settings.url.indexOf("form_next_step") > -1) {
                                $('#stored_addresses').val(flagVal);
                            }
                        });
                    })

                    function check_required() {
                        $('.field-required').each(function() {
                            var self = $(this).find('input');
                            var selfSelect = $(this).find('select');

                            if (self.val() !== '') {
                                self.parent().next().remove();
                                self.parents('.field-error').removeClass('field-error')
                            }

                            if (selfSelect !== null || selfSelect !== 0) {
                                selfSelect.parent().next().remove();
                                selfSelect.parents('.field-error').removeClass('field-error')
                            }
                        });
                    }
                    $('body').on('change', '#stored_addresses', function() {
                        check_required();
                    });

                }
            }, 0)
        })
    </script>

    <script type="text/javascript">
        window.onpageshow = function(event) {
            // if (event.persisted) {
            //     var currentUrl = '';

            //     currentUrl = '/checkouts/d435087cf79d41408a2e2117de8b2c6b?step=1';


            //     if (currentUrl)
            //         window.location = currentUrl;
            // }
        };



        var isInit = false;

        const paylayterLoadingTrigger = (isLoading = true) => {
            if (isLoading) {
                $('.payment-later-table').addClass('hidden');
                $('.paylater--ul').addClass('hidden');
                $('.payment-later-table--loading').addClass('show');
                $('.checkout-payment__loading--box').addClass('show');
            } else {
                $('.checkout-payment__loading--box').removeClass('show');
                $('.payment-later-table--loading').removeClass('show');
                $('.payment-later-table').removeClass('hidden');
                $('.paylater--ul').removeClass('hidden');
            }
        }

        function funcFormOnSubmit(e) {

            if (!isInit) {
                isInit = true;

                $.fn.tagName = function() {
                    return this.prop("tagName").toLowerCase();
                };
            }

            // update new version 
            let oldVer = $('.checkout_version')
            $(oldVer).attr('data_checkout_version', oldVer++);
            //----------

            if (typeof(e) == 'string') {
                var element = $(e);
                var formData = e;
            } else {
                var element = this;
                var formData = this;
                //e.preventDefault();
                let formIdCheck = $(element).attr('id'),
                    replaceElement = [],
                    funcCallback;
                e.preventDefault();
            }

            $(element).find('button:submit').addClass('btn-loading');
            let formId = $(element).attr('id'),
                replaceElement = [],
                funcCallback;

            if (formId == undefined || formId == null || formId == '')
                return;

            const findPaymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').attr('type-id');

            const isReePay = findPaymentMethodId == 41 || findPaymentMethodId == 43 || findPaymentMethodId == 46


            if (['section-payment-method', 'form_discount_add', 'section-shipping-rate'].includes(formId) && isReePay) {
                if (findPaymentMethodId == 41) {
                    $('#section-pay-later-method').removeClass('hidden');
                }
                if (findPaymentMethodId == 43) {
                    $('#section-pay-later-method-kredivo').removeClass('hidden');
                }
                if (findPaymentMethodId == 46) {
                    $('#section-pay-later-method-aftee').removeClass('hidden');
                }
                paylayterLoadingTrigger()
            }

            if (formId == 'form_update_location_customer_shipping' || formId == 'form_update_shipping_method' || formId ==
                'section-shipping-rate' || formId == 'section-payment-method') {
                if ($('.order-checkout__loading--box').length > 0) {
                    $('#' + formId).find('.order-checkout__loading--box').addClass('show');
                    $('body').find('button:submit').addClass('btn-loading');
                }
            }



            if (formId == 'form_next_step' || formId == "checkout_complete") {
                formData = '.section-customer-information';
                replaceElement = [...replaceElement,
                    '#checkout_order_information_changed_error_message',
                    '.step-sections',
                    '.order-summary-sections'
                ]
            } else if (
                formId == 'form_redeem_add' ||
                formId == 'form_redeem_remove' ||
                formId == 'form_discount_add' ||
                formId == 'form_discount_remove' ||
                formId == 'form_update_location_customer_shipping' ||
                formId == 'form_update_shipping_method' ||
                formId == "checkout_complete"

            ) {
                replaceElement = [...replaceElement, '#checkout_order_information_changed_error_message',
                    '#form_update_location_customer_shipping',
                    '#change_pick_location_or_shipping',
                    '.inventory_location',
                    '.inventory_location_data',
                    '.order-summary-toggle-inner .order-summary-toggle-total-recap',
                    '.order-summary-sections'
                ]
            }


            replaceElement = [...replaceElement, '#checkout_order_information_changed_error_message']
            if (formId == 'form_update_location_customer_shipping' || formId == 'form_update_shipping_method') {
                formId = 'form_update_shipping_method';
                replaceElement = [...replaceElement, '#form_update_location_customer_shipping',
                    '#change_pick_location_or_shipping',
                    '.inventory_location',
                    '.inventory_location_data',
                    '.order-summary-toggle-inner .order-summary-toggle-total-recap',
                    '.order-summary-sections'
                ]
            }
            if (formId == 'form_update_location_customer_pick_at_location' || formId == 'form_update_shipping_method') {
                formId = 'form_update_shipping_method';
                replaceElement = [...replaceElement, '#form_update_location_customer_pick_at_location',
                    '#change_pick_location_or_shipping',
                    '.inventory_location',
                    '.inventory_location_data',
                    '.order-summary-toggle-inner .order-summary-toggle-total-recap',
                    '.order-summary-sections',
                    '.order-summary-section.order-summary-section-total-lines.total-line-table.total-line-table-footer',
                    '.order-summary-section.order-summary-section-total-lines.total-line-table.total-line.total-line-redeem',
                    '.order-summary-section.order-summary-section-redeem.redeem-login-section'
                ]
            }





            replaceElement.push('#section-pay-later-method');
            replaceElement.push('#section-pay-later-method-kredivo')
            replaceElement.push('#section-pay-later-method-aftee')
            if (!$(formData) || $(formData).length == 0) {
                window.location.reload();
                return false;
            }

            var inputurl = '';

            if (($(formData).tagName() != 'form' && $(formData).tagName() != 'input' && $(formData).tagName() != 'div') ||
                ($(formData).tagName() == 'input' || $(formData).tagName() == 'div')) {

                formData += ' :input';
            }
            try {

                var listparameters = new URLSearchParams($(formData).serialize());

                var countrytmp = $('body').find('input[name$="selected_customer_shipping_country"]').val();
                if (countrytmp && countrytmp != '') {
                    listparameters.set('customer_shipping_country', countrytmp);
                }

                if ($('body').find('#customer_pick_at_location_true').length != 0 && $('body').find(
                        '#customer_pick_at_location_true').is(':checked')) {
                    let location_id_checked = $('.inventory_location input[name="inventory_location_id"]:checked').val();
                    listparameters.set('inventory_location_id', location_id_checked);
                }

                if ($('body').find('#section-shipping-rate').length != 0) {
                    let shipping_rate_id_checked = $('#section-shipping-rate input[name="shipping_rate_id"]:checked').val();
                    listparameters.set('shipping_rate_id', shipping_rate_id_checked);
                }


                var provincetmp = $('body').find('input[name$="selected_customer_shipping_province"]').val();
                if (provincetmp && provincetmp != '' && provincetmp != "null") {
                    listparameters.set('customer_shipping_province', provincetmp);
                    var districttmp = $('body').find('input[name$="selected_customer_shipping_district"]').val();
                    if (districttmp && districttmp != '' && districttmp != "null") {
                        listparameters.set('customer_shipping_district', districttmp);
                        var wardtmp = $('body').find('input[name$="selected_customer_shipping_ward"]').val();
                        if (wardtmp && wardtmp != '') listparameters.set('customer_shipping_ward', wardtmp);
                    } else {
                        var districtid = listparameters.get('customer_shipping_district');
                        if (districtid == null || districtid == '' || districtid == "null" || districtid == 'null') {
                            listparameters.set('customer_shipping_district', '');
                            listparameters.set('customer_shipping_ward', '');
                        }
                    }
                } else {
                    var provinceid = listparameters.get('customer_shipping_province');
                    if (provinceid == null || provinceid == '' || provinceid == "null" || provinceid == 'null') {
                        var district = listparameters.get('customer_shipping_district')
                        if (district && district != '') {
                            listparameters.set('customer_shipping_district', '');
                        }

                        var ward = listparameters.get('customer_shipping_ward')
                        if (ward && ward != '') {
                            listparameters.set('customer_shipping_ward', '');
                        }
                    }
                }





                var address1tmp = $('body').find('input[name$="billing_address[address1]"]').val();
                if (address1tmp != '' && address1tmp != undefined) listparameters.set('billing_address[address1]',
                    address1tmp);

                var phonetmp = $('body').find('input[name$="billing_address[phone]"]').val();
                if (phonetmp != '' && phonetmp != undefined) listparameters.set('billing_address[phone]', phonetmp);

                var emailtmp = $('body').find('input[name$="checkout_user[email]"]').val();
                if (emailtmp != '' && emailtmp != undefined) listparameters.set('checkout_user[email]', emailtmp);

                var fullnametmp = $('body').find('input[name$="billing_address[full_name]"]').val();
                if (fullnametmp != '' && fullnametmp != undefined) listparameters.set('billing_address[full_name]',
                    fullnametmp);


                listparameters.delete('selected_customer_shipping_country');
                listparameters.delete('selected_customer_shipping_province');
                listparameters.delete('selected_customer_shipping_district');
                listparameters.delete('selected_customer_shipping_ward');

                if ($('body').find('input[name$="customer_pick_at_location"]')) {
                    var optionShippingtmp = $('body').find('input[name$="customer_pick_at_location"]:checked').val();
                    if (optionShippingtmp != '' && optionShippingtmp != undefined) listparameters.set(
                        'customer_pick_at_location', optionShippingtmp);

                } else {
                    listparameters.append("customer_pick_at_location", false);
                }


                if (formId == 'form_next_step' || formId == 'form_update_shipping_method' || formId ==
                    'section-payment-method' || formId == 'section-shipping-rate') {
                    var version = Number($('body').find('.checkout_version').attr("data_checkout_version"));
                    if (version)
                        listparameters.append("version", version);
                }

                inputurl = listparameters.toString();

            } catch (err) {

                // Older Browser URLSearchParams not support
                var listparameters = parseQueryString($(formData).serialize());
                if (formId == 'form_next_step') {
                    var version = Number($('body').find('.checkout_version').attr("data_checkout_version"));
                    listparameters.version = version;
                }
                var countrytmp = $('body').find('input[name$="selected_customer_shipping_country"]').val();
                if (countrytmp != '') {
                    listparameters.customer_shipping_country = countrytmp;
                }

                var provincetmp = $('body').find('input[name$="selected_customer_shipping_province"]').val();
                if (provincetmp != '' && listparameters.customer_shipping_province) listparameters
                    .customer_shipping_province = provincetmp;

                var districttmp = $('body').find('input[name$="selected_customer_shipping_district"]').val();
                if (districttmp != '' && listparameters.customer_shipping_district) listparameters
                    .customer_shipping_district = districttmp;

                var wardtmp = $('body').find('input[name$="selected_customer_shipping_ward"]').val();
                if (wardtmp != '' && listparameters.customer_shipping_ward) listparameters.customer_shipping_ward = wardtmp;


                var address1tmp = $('body').find('input[name$="billing_address[address1]"]').val();
                if (address1tmp != '' && listparameters.billing_address[address1] && address1tmp != undefined)
                    listparameters.set('billing_address[address1]', address1tmp);

                var phonetmp = $('body').find('input[name$="billing_address[phone]"]').val();
                if (phonetmp != '' && listparameters.billing_address[phone] && phonetmp != undefined) listparameters.set(
                    'billing_address[phone]', phonetmp);

                var emailtmp = $('body').find('input[name$="checkout_user[email]"]').val();
                if (emailtmp != '' && listparameters.checkout_user[email] && emailtmp != undefined) listparameters.set(
                    'checkout_user[email]', emailtmp);


                var fullnametmp = $('body').find('input[name$="billing_address[full_name]"]').val();
                if (fullnametmp != '' && listparameters.billing_address[full_name] && fullnametmp != undefined)
                    listparameters.set('billing_address[full_name]', fullnametmp);


                delete listparameters.selected_customer_shipping_country;
                delete listparameters.selected_customer_shipping_province;
                delete listparameters.selected_customer_shipping_district;
                delete listparameters.selected_customer_shipping_ward;

                if ($('body').find('input[name$="customer_pick_at_location"]')) {
                    var optionShippingtmp = $('body').find('input[name$="customer_pick_at_location"]:checked').val();
                    if (optionShippingtmp != '' && optionShippingtmp != undefined) listparameters.set(
                        'customer_pick_at_location', optionShippingtmp);
                } else {
                    listparameters.append("customer_pick_at_location", false);
                }

                if (formId == 'form_next_step' || formId == 'form_update_shipping_method' || formId ==
                    'section-payment-method' || formId == 'section-shipping-rate') {
                    var fiversion = $('body').find('.checkout_version').attr("data_checkout_version");
                    if (fiversion && fiversion != '') {
                        listparameters['version'] = Number(fiversion);
                    }

                }


                var listObject = '';
                for (var key in listparameters) {
                    listObject += '&' + key + '=' + encodeURIComponent(listparameters[key]);
                };
                inputurl = listObject.substring(1);

            }



            let url = window.location.origin + window.location.pathname + '?' + inputurl + encodeURI('&form_name=' + formId)
            let data = '';
            var method = "get";
            if (formId == "checkout_complete") {
                url = '/checkouts/complete';
                method = "post";
                data = $('#' + formId).serialize()
            }


            $.ajax({
                type: method,
                url: url,
                data: data,
                success: function(html) {
                    if ($(html).attr('id') == 'redirect-url') {
                        window.location = $(html).val();
                    } else {
                        if (replaceElement.length > 0) {
                            for (var i = 0; i < replaceElement.length; i++) {
                                var tempElement = replaceElement[i];
                                var newElement = $(html).find(tempElement);

                                if (newElement.length > 0) {
                                    if (tempElement == '.step-sections')
                                        $(tempElement).attr('step', $(newElement).attr('step'));

                                    var listTempElement = $(tempElement);

                                    for (var j = 0; j < newElement.length; j++)
                                        if (j < listTempElement.length) {

                                            if ($(newElement[j]).attr('id') ==
                                                'checkout_order_information_changed_error_message') {
                                                if ($(newElement[j]).find('span').html().trim() != '') {
                                                    $(listTempElement[j]).removeClass('hidden');
                                                    $("html, body").animate({
                                                        scrollTop: 0
                                                    }, "slow");
                                                    if ($(window).width() <= 999) {
                                                        $('.banner').addClass('error');
                                                    }
                                                } else {
                                                    $(listTempElement[j]).addClass('hidden');
                                                    if ($(window).width() <= 999) {
                                                        $('.banner').removeClass('error');
                                                    }
                                                }
                                            }
                                            if ($(newElement[j]).attr('class') == 'order-summary-sections' &&
                                                formId == 'section-payment-method') {
                                                const oldVersion = $('.checkout_version')
                                                const newVersion = $(html).find('.checkout_version').attr(
                                                    'data_checkout_version')
                                                $(oldVersion).attr('data_checkout_version', newVersion);
                                                $(listTempElement[j]).html($(newElement[j]).html());
                                            } else {
                                                $(listTempElement[j]).html($(newElement[j]).html());
                                            }

                                        }
                                }
                            }
                        }




                        var is_vietnam = $("#is_vietnam").val();
                        if (is_vietnam && is_vietnam == "true") {
                            //$("#div_location_country_not_vietnam").hide();
                        } else {
                            $("#div_location_country_not_vietnam").show();
                        }



                        $('body').attr('src', $(html).attr('src'));
                        $(element).find('button:submit').removeClass('btn-loading');
                        $('body').find('button:submit').removeClass('btn-loading');
                        if (($('body').find('.field-error') && $('body').find('.field-error').length > 0) ||
                            ($('body').find('.has-error') && $('body').find('.has-error').length > 0)) {
                            $("html, body").animate({
                                scrollTop: 0
                            }, "slow");
                        }
                        if (['section-payment-method', 'form_discount_add', 'section-shipping-rate',
                                'form_discount_remove'
                            ].includes(formId) && isReePay) {
                            if (formId != 'section-payment-method') {
                                paylayterLoadingTrigger()
                                funcFormOnSubmit('#section-payment-method')
                            } else {
                                if (findPaymentMethodId == 41) {
                                    $('#section-pay-later-method').removeClass('hidden')
                                }
                                if (findPaymentMethodId == 43) {
                                    $('#section-pay-later-method-kredivo').removeClass('hidden')
                                }
                                if (findPaymentMethodId == 46) {
                                    $('#section-pay-later-method-aftee').removeClass('hidden')
                                }
                                paylayterLoadingTrigger(false)
                            }
                        } else {
                            paylayterLoadingTrigger()
                        }

                        if (formId == 'form_update_location_customer_shipping' || formId ==
                            'form_update_shipping_method' || formId == 'section-shipping-rate' || formId ==
                            'section-payment-method') {
                            if ($('.order-checkout__loading--box').length > 0) {
                                $('.order-checkout__loading--box').removeClass('show');
                            }
                        }
                        if (funcCallback)
                            funcCallback();
                    }
                }
            }).fail(function() {
                $(element).find('button:submit').removeClass('btn-loading');
                if (formId == 'section-payment-method') {
                    $('#section-pay-later-method').addClass('hidden');
                    paylayterLoadingTrigger(false)
                }
                if (formId == 'form_update_location_customer_shipping' || formId == 'form_update_shipping_method' ||
                    formId == 'section-shipping-rate' || formId == 'section-payment-method') {
                    if ($('.order-checkout__loading--box').length > 0) {
                        $('.order-checkout__loading--box').removeClass('show');

                    }
                }
            });

            return false;
        };

        function getRepayment(e) {
            let element, formData;
            if (typeof(e) == 'string') {
                element = $(e);
            } else {
                element = this;
                e.preventDefault();
            }
            const findPaymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').attr('type-id');

            const isReePay = findPaymentMethodId == 41 || findPaymentMethodId == 43 || findPaymentMethodId == 46

            var formId = $(element).attr('id'),
                replaceElement = [],
                funcCallback;
            if (formId == undefined || formId == null || formId == '') return;
            if (isReePay) {
                if (findPaymentMethodId == 41) {
                    $('#section-pay-later-method-kredivo').addClass('hidden');
                    $('#section-pay-later-method-aftee').addClass('hidden');
                    $('#section-pay-later-method').removeClass('hidden');
                }
                if (findPaymentMethodId == 43) {
                    $('#section-pay-later-method').addClass('hidden');
                    $('#section-pay-later-method-aftee').addClass('hidden');
                    $('#section-pay-later-method-kredivo').removeClass('hidden');
                }
                if (findPaymentMethodId == 46) {
                    $('#section-pay-later-method').addClass('hidden');
                    $('#section-pay-later-method-kredivo').addClass('hidden');
                    $('#section-pay-later-method-afte').removeClass('hidden');
                }
                paylayterLoadingTrigger()
            }
            replaceElement.push('.content-box');
            replaceElement.push('#section-pay-later-method');
            replaceElement.push('#section-pay-later-method-kredivo')
            replaceElement.push('#section-pay-later-method-aftee')
            let paymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').val()
            if (formId == 'section-payment-method') {
                $.ajax({
                    type: 'GET',
                    url: window.location.origin + window.location.pathname + '?' + 'payment_method_id=' +
                        paymentMethodId + '&preview=true',
                    success: function(html) {
                        for (var i = 0; i < replaceElement.length; i++) {
                            let tempElement = replaceElement[i];
                            let newElement = $(html).find(tempElement);
                            if (newElement.length > 0) {

                                let listTempElement = $(tempElement);
                                for (var j = 0; j < newElement.length; j++)
                                    if (j < listTempElement.length) {
                                        $(listTempElement[j]).html($(newElement[j]).html());
                                    }
                            }
                        }
                        if (isReePay) {
                            if (findPaymentMethodId == 41) {
                                $('#section-pay-later-method').removeClass('hidden');
                            }
                            if (findPaymentMethodId == 43) {
                                $('#section-pay-later-method-kredivo').removeClass('hidden');
                            }
                            if (findPaymentMethodId == 46) {
                                $('#section-pay-later-method-aftee').removeClass('hidden');
                            }
                        };
                        paylayterLoadingTrigger(false)
                    }
                }).fail(function() {
                    $('#section-pay-later-method').addClass('hidden');
                    $('#section-pay-later-method-kredivo').addClass('hidden');
                    $('#section-pay-later-method-aftee').addClass('hidden');
                    $('.checkout-payment__loading--box').removeClass('show');
                    $('.payment-later-table--loading').removeClass('show');
                })
            }
            return false;
        }

        function funcSetEvent() {

            var effectControlFieldClass = '.field input, .field select, .field textarea';
            $('body')
                .on('focus', effectControlFieldClass, function() {
                    funcFieldFocus($(this), true);
                })
                .on('blur', effectControlFieldClass, function() {
                    funcFieldFocus($(this), false);
                    funcFieldHasValue($(this), true);
                    var idDOM = $(this).attr('id');


                })
                .on('keyup input paste', effectControlFieldClass, function() {
                    funcFieldHasValue($(this), false);
                })
                .on('submit', 'form', funcFormOnSubmit);







            //$("#div_location_country_not_vietnam").hide();
            $("#is_vietnam").val("true");
            $("#div_location_country_not_vietnam").hide();





            $('body')
                .on('change', '#form_update_location_customer_shipping', function(e) {
                    if (e.target.id === 'billing_address_address1') return;
                    $(this).submit();
                });


            $('body')

                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_country]', function() {

                    var currentCountry = $(this).val();
                    if (currentCountry && currentCountry != "null" && currentCountry != 241) {
                        $("#is_vietnam").val("false");
                        $("#div_location_country_not_vietnam").show();
                    } else {
                        $("#is_vietnam").val("true");
                        $("#div_location_country_not_vietnam").hide();
                    }
                })

                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_country]', function() {

                    var country_selected = $('body').find('input[name=selected_customer_shipping_country]');
                    if (country_selected && country_selected.length > 0) {
                        $(country_selected).val($(this).val());

                        var province_selected = $('body').find(
                            '#form_update_location_customer_shipping select[name=customer_shipping_province]');
                        if (province_selected && province_selected.length > 0) {
                            province_selected.val("null");
                        }
                        var district_selected = $('body').find(
                            '#form_update_location_customer_shipping select[name=customer_shipping_district]');
                        if (district_selected && district_selected.length > 0) {
                            district_selected.val("null");
                        }

                        var ward_selected = $('body').find(
                            '#form_update_location_customer_shipping select[name=customer_shipping_ward]');
                        if (ward_selected && ward_selected.length > 0) {
                            ward_selected.val("null");
                        }

                        var province = $('.section-customer-information input:hidden[name=customer_shipping_province]');
                        if (province) {
                            province.val("null");
                        }

                        var district = $('.section-customer-information input:hidden[name=customer_shipping_district]');
                        if (district) {
                            district.val("null");
                        }
                        var ward = $('.section-customer-information input:hidden[name=customer_shipping_ward]');
                        if (ward) {
                            ward.val("null");
                        }
                    }

                    $('.section-customer-information input:hidden[name=customer_shipping_coutry]').val($(this).val());
                })
                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_province]',
                    function() {

                        var province_selected = $('body').find('input[name=selected_customer_shipping_province]');
                        if (province_selected && province_selected.length > 0) {
                            $(province_selected).val($(this).val());
                            var district_selected = $('body').find(
                                '#form_update_location_customer_shipping select[name=customer_shipping_district]');
                            if (district_selected && district_selected.length > 0) {
                                district_selected.val("null");
                            }

                            var ward_selected = $('body').find(
                                '#form_update_location_customer_shipping select[name=customer_shipping_ward]');
                            if (ward_selected && ward_selected.length > 0) {
                                ward_selected.val("null");
                            }

                            var district = $('.section-customer-information input:hidden[name=customer_shipping_district]');
                            if (district) {
                                district.val("null");
                            }
                            var ward = $('.section-customer-information input:hidden[name=customer_shipping_ward]');
                            if (ward) {
                                ward.val("null");
                            }
                        }
                        $('.section-customer-information input:hidden[name=customer_shipping_province]').val($(this).val());
                    })
                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_district]',
                    function() {

                        var district_selected = $('body').find('input[name=selected_customer_shipping_district]');
                        if (district_selected && district_selected.length > 0) {
                            $(district_selected).val($(this).val());

                            var ward_selected = $('body').find(
                                '#form_update_location_customer_shipping select[name=customer_shipping_ward]');
                            if (ward_selected && ward_selected.length > 0) {
                                ward_selected.val("null");
                            }
                            var ward = $('.section-customer-information input:hidden[name=customer_shipping_ward]');
                            if (ward) {
                                ward.val("null");
                            }
                        }
                        $('.section-customer-information input:hidden[name=customer_shipping_district]').val($(this).val());
                    })
                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_ward]', function() {


                    var ward_selected = $('body').find('input[name=selected_customer_shipping_ward]');
                    if (ward_selected && ward_selected.length > 0) {
                        $(ward_selected).val($(this).val());
                    }

                    $('.section-customer-information input:hidden[name=customer_shipping_ward]').val($(this).val());
                });



            $('body')
                .on('change', '#form_update_shipping_method input:radio', function(e) {
                    $('#form_update_shipping_method .content-box-row.content-box-row-secondary').addClass('hidden');

                    var id = $(this).attr('id');

                    if (id) {
                        var sub = $('body').find('.content-box-row.content-box-row-secondary[for=' + id + ']')

                        if (sub && sub.length > 0) {
                            $(sub).removeClass('hidden');
                        }
                    }
                });






        };

        function funcFieldFocus(fieldInputElement, isFocus) {

            if (fieldInputElement == undefined)
                return;

            var fieldElement = $(fieldInputElement).closest('.field');

            if (fieldElement == undefined)
                return;

            if (isFocus)
                $(fieldElement).addClass('field-active');
            else
                $(fieldElement).removeClass('field-active');
        };

        function funcFieldHasValue(fieldInputElement, isCheckRemove) {

            if (fieldInputElement == undefined)
                return;

            var fieldElement = $(fieldInputElement).closest('.field');

            if (fieldElement == undefined)
                return;

            if ($(fieldElement).find('.field-input-wrapper-select').length > 0) {
                var value = $(fieldInputElement).find(':selected').val();

                if (value == 'null')
                    value = undefined;

                if ($(fieldInputElement)[0].id == 'customer_shipping_country') {
                    var country_selected = $('body').find('input[name=selected_customer_shipping_country]');
                    if (country_selected && country_selected.length > 0) {
                        $(country_selected).val(value);
                    }
                }

                if ($(fieldInputElement)[0].id == 'customer_shipping_province') {
                    var province_selected = $('body').find('input[name=selected_customer_shipping_province]');
                    if (province_selected && province_selected.length > 0) {
                        $(province_selected).val(value);
                    }
                }

                if ($(fieldInputElement)[0].id == 'customer_shipping_district') {
                    var district_selected = $('body').find('input[name=selected_customer_shipping_district]');
                    if (district_selected && district_selected.length > 0) {
                        $(district_selected).val(value);
                    }
                }
                if ($(fieldInputElement)[0].id == 'customer_shipping_ward') {
                    var ward_selected = $('body').find('input[name=selected_customer_shipping_ward]');
                    if (ward_selected && ward_selected.length > 0) {
                        $(ward_selected).val(value);
                    }
                }

            } else {
                var value = $(fieldInputElement).val();
            }

            if (!isCheckRemove) {
                if (value != $(fieldInputElement).attr('value'))
                    $(fieldElement).removeClass('field-error');
            }

            var fieldInputBtnWrapperElement = $(fieldInputElement).closest('.field-input-btn-wrapper');

            if (value && value.trim() != '') {
                $(fieldElement).addClass('field-show-floating-label');
                $(fieldInputBtnWrapperElement).find('button:submit').removeClass('btn-disabled');
            } else if (isCheckRemove) {
                $(fieldElement).removeClass('field-show-floating-label');
                $(fieldInputBtnWrapperElement).find('button:submit').addClass('btn-disabled');
            } else {
                $(fieldInputBtnWrapperElement).find('button:submit').addClass('btn-disabled');
            }
        };

        function funcInit() {

            funcSetEvent();


        }

        function funcReplaceMembershipInfo(html, replaceElement) {

            var tempElement = $(replaceElement);
            var newElement = $(html).find(replaceElement);
            tempElement.html(newElement.html());
        }

        function funcMembershipInfo() {

        }

        function funcGetBrowserInfo() {

            $.ajax({
                type: 'POST',
                url: '/browser-info?w=' + $(window).width() + '&h=' + $(window).height(),
                success: function() {}
            });


        }
        $(document).ready(function() {
            funcInit();
            funcMembershipInfo();
            funcGetBrowserInfo();
        });
    </script>


    <script type="text/javascript">
        var toggleShowOrderSummary = false;
        $(document).ready(function() {
            var currentUrl = '';
            const findPaymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').attr(
                'type-id');
            const isReePay = findPaymentMethodId == 41 || findPaymentMethodId == 43 || findPaymentMethodId == 46
            if (isReePay) {

                funcFormOnSubmit('#section-payment-method')

            }

            // currentUrl = '/checkouts/d435087cf79d41408a2e2117de8b2c6b?step=1';


            if ($('#reloadValue').val().length == 0) {
                $('#reloadValue').val(currentUrl);
                $('body').show();
            } else {
                window.location = $('#reloadValue').val();
                $('#reloadValue').val('');
            }

            $('body')
                .on('click', '.order-summary-toggle', function() {
                    toggleShowOrderSummary = !toggleShowOrderSummary;

                    if (toggleShowOrderSummary) {
                        $('.order-summary-toggle')
                            .removeClass('order-summary-toggle-hide')
                            .addClass('order-summary-toggle-show');

                        $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                            .removeClass('order-summary-is-collapsed')
                            .addClass('order-summary-is-expanded');

                        $('.sidebar.sidebar-second .sidebar-content .order-summary')
                            .removeClass('order-summary-is-expanded')
                            .addClass('order-summary-is-collapsed');
                    } else {
                        $('.order-summary-toggle')
                            .removeClass('order-summary-toggle-show')
                            .addClass('order-summary-toggle-hide');

                        $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                            .removeClass('order-summary-is-expanded')
                            .addClass('order-summary-is-collapsed');

                        $('.sidebar.sidebar-second .sidebar-content .order-summary')
                            .removeClass('order-summary-is-collapsed')
                            .addClass('order-summary-is-expanded');
                    }
                });
        });
    </script>

    <script type="text/javascript">
        //<![CDATA[
        if ((typeof Haravan) === 'undefined') {
            Haravan = {};
        }
        Haravan.culture = 'vi-VN';
        Haravan.shop = 'titek.myharavan.com';
        Haravan.theme = {
            "name": "08/08/2023 Mai 760633+09/08/2023 760809",
            "id": 1001107404,
            "role": "main"
        };
        Haravan.domain = 'titekvn.com';
        //]]>
    </script>
    <script defer="" src="https://stats.hstatic.net/beacon.min.js" hrv-beacon-t="200000680123"></script>
    {{-- <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style> --}}
    {{-- <script type="text/javascript">
        window.HaravanAnalytics = window.HaravanAnalytics || {};
        window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
        window.HaravanAnalytics.meta.currency = 'VND';
        var meta = {
            "page": {
                "pageType": "checkout",
                "resourceType": "checkout",
                "resourceId": "d435087cf79d41408a2e2117de8b2c6b"
            },
            "cart": {
                "products": [{
                    "variantId": 1109500956,
                    "productId": 1048411865,
                    "price": 1500000000.0,
                    "name": "TTK FIRE - 3050 - TTK FIRE - 3050",
                    "vendor": "PC GAMING",
                    "variant": "TTK FIRE - 3050",
                    "type": "TTK FIRE",
                    "quantity": 1
                }, {
                    "variantId": 1105772694,
                    "productId": 1046864694,
                    "price": 1700000000.0,
                    "name": "TTK FIRE - 3060 - TTK FIRE - 3060",
                    "vendor": "PC GAMING",
                    "variant": "TTK FIRE - 3060",
                    "type": "TTK FIRE",
                    "quantity": 1
                }, {
                    "variantId": 1107597774,
                    "productId": 1047732620,
                    "price": 1100000000.0,
                    "name": "TTK FIRE - 1650 - TTK Fire - 1650",
                    "vendor": "PC GAMING",
                    "variant": "TTK Fire - 1650",
                    "type": "TTK FIRE",
                    "quantity": 1
                }, {
                    "variantId": 1109501086,
                    "productId": 1048411919,
                    "price": 1250000000.0,
                    "name": "TTK FIRE - 1650 v2 - TTK FIRE - 1650 v2",
                    "vendor": "PC GAMING",
                    "variant": "TTK FIRE - 1650 v2",
                    "type": "TTK FIRE",
                    "quantity": 1
                }],
                "item_count": 4,
                "total_price": 5550000000.0
            }
        };
        for (var attr in meta) {
            window.HaravanAnalytics.meta[attr] = meta[attr];
        }
        window.HaravanAnalytics.AutoTrack = true;
    </script> --}}
    {{-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-24C1XZ9BDQ"></script> --}}
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
    <input id="reloadValue" type="hidden" name="reloadValue" value="">
    <input id="is_vietnam" type="hidden" value="true">
    <input id="is_vietnam_location" type="hidden" value="true">
    <div class="banner">
        <div class="wrap">
            <a href="/" class="logo">
                <h1 class="logo-text">QLAH</h1>
            </a>
        </div>
    </div>
    <button class="order-summary-toggle order-summary-toggle-hide">
        <div class="wrap">
            <div class="order-summary-toggle-inner">
                <div class="order-summary-toggle-icon-wrapper">
                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg"
                        class="order-summary-toggle-icon">
                        <path
                            d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z">
                        </path>
                    </svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-show">
                    <span>Hiển thị thông tin đơn hàng</span>
                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg"
                        class="order-summary-toggle-dropdown" fill="#000">
                        <path
                            d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z">
                        </path>
                    </svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                    <span>Ẩn thông tin đơn hàng</span>
                    <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg"
                        class="order-summary-toggle-dropdown" fill="#000">
                        <path
                            d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z">
                        </path>
                    </svg>
                </div>
                <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="5550000000">
                    <span class="total-recap-final-price">55,500,000₫</span>
                </div>
            </div>
        </div>
    </button>
    <div class="content content-second">
        <div class="wrap">
            <div class="sidebar sidebar-second">
                <div class="sidebar-content">
                    <div class="order-summary">
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-discount"
                                data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">

                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Discount Code</label>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        a.logo {
                            display: block;
                        }

                        .logo-cus {
                            width: 100%;
                            padding: 15px 0;
                            text-align: "",
                        }

                        .logo-cus img {
                            max-height: 4.2857142857em
                        }

                        .logo-text {
                            text-align: "";
                        }

                        #form_update_location_customer_shipping {
                            background-color: white !important;
                        }

                        .section .section-content .content-box {
                            box-shadow: none !important;
                            border-radius: none !important;
                        }

                        .content-box-row-secondary {
                            padding: 0 !important;
                        }

                        .main .main-content {
                            padding-bottom: 0px !important;
                        }

                        @media (max-width: 767px) {
                            .banner a {
                                display: block;
                            }
                        }
                    </style>

                </div>
                <div class="main-content">


                    <div id="checkout_order_information_changed_error_message" class="hidden"
                        style="margin-bottom:15px">



                        <p class="field-message field-message-error alert alert-danger"><svg x="0px"
                                y="0px" viewBox="0 0 286.054 286.054"
                                style="enable-background:new 0 0 286.054 286.054;" xml:space="preserve">
                                <g>
                                    <path style="fill:#E2574C;"
                                        d="M143.027,0C64.04,0,0,64.04,0,143.027c0,78.996,64.04,143.027,143.027,143.027 c78.996,0,143.027-64.022,143.027-143.027C286.054,64.04,222.022,0,143.027,0z M143.027,259.236 c-64.183,0-116.209-52.026-116.209-116.209S78.844,26.818,143.027,26.818s116.209,52.026,116.209,116.209 S207.21,259.236,143.027,259.236z M143.036,62.726c-10.244,0-17.995,5.346-17.995,13.981v79.201c0,8.644,7.75,13.972,17.995,13.972 c9.994,0,17.995-5.551,17.995-13.972V76.707C161.03,68.277,153.03,62.726,143.036,62.726z M143.036,187.723 c-9.842,0-17.852,8.01-17.852,17.86c0,9.833,8.01,17.843,17.852,17.843s17.843-8.01,17.843-17.843 C160.878,195.732,152.878,187.723,143.036,187.723z">
                                    </path>
                                </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                            </svg>
                            <span>



                            </span>

                        </p>
                    </div>
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
<<<<<<< HEAD
                                <button data-href="{{ route('shop-check-out') }}" type="submit"
                                    id="button-checkout" class="step-footer-continue-btn btn">
=======
                                <button data-href="{{route('shop-check-out')}}" type="submit" id="button-checkout" class=" btn">
>>>>>>> eab8692899d3ec14c519aa49c6af5d188588f98e
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

    <script>
        $(document).ready(function() {
            checkPayment();

            function checkPayment() {
                let check = localStorage.getItem('checkout');
                if (check) {
                    localStorage.removeItem('checkout');
                    $('#message-checkout').attr('style', 'padding:5px');
                    $('#message-checkout').html(
                        "You have successfully placed an order. Go to <a style='color:red' href='{{ route('payment-history') }}'>Order History</a> to review your order history"
                    );
                }
            }

            $('#button-checkout').on('click', function(e) {
                $('#message-checkout').html('');
                $('#message-error').html('');
                e.preventDefault();
                let href = $(this).attr('data-href');
                let csrf = '{{ csrf_token() }}';
                let name = $('#billing_address_full_name').val();
                let email = $('#checkout_user_email').val();
                let phone = $('#billing_address_phone').val();
                let address = $('#billing_address_address').val();
                let note = $('#billing_note').val();
                console.log(href);

                $.ajax({
                    type: 'POST',
                    url: href,
                    data: {
                        _token: csrf,
                        name: name,
                        email: email,
                        phone: phone,
                        address: address,
                        note: note,
                    },
                    success: function(res) {
                        if (res == 200) {
                            location.reload();
                            localStorage.setItem('checkout', 'true');
                        } else if (res == 401) {
                            $('#message-error').attr('style', 'padding:5px');
                            $('#message-error').html(
                                "Please add product to cart before checkout!!! Back to <a href='{{ route('dashboad') }}'>Home</a>"
                            );
                        } else {
                            $('#message-error').attr('style', 'padding:5px');
                            $('#message-error').html(
                                "Please login before checkout!!! Go to <a href='{{ route('dashboad') }}'>Login</a>"
                            );
                        }
                    },
                    error: function(XMLHttpRequest, textStatus) {
                        $('#message-error').html(XMLHttpRequest.responseJSON.message)
                    }
                })
            })
            var dataDiscount = {
                "data": []
            };

            dataDiscount.data.forEach(function(item) {
                var it = item.discount;
                it.description = getDiscountDescription(it);
                it.highlight_note = getDiscountHighlightNote(it);
                it.enddate = getDiscountExpireDate(it);
            });

            function getDiscountExpireDate(item) {
                var strDate = "HSD: ";
                if (item.enddate != "") {
                    var date = (new Date(item.enddate).toLocaleDateString(Haravan.culture));
                    return strDate.concat(date);
                }
                return "";
            }

            function getDiscountHighlightNote(item) {
                var description = "";
                var applyForObject = "";
                var strDiscountType = "";

                if (item.discount_type == 3) {
                    //shipping
                    if (item.take_type == 1) //amount
                    {
                        var amount = Haravan.formatMoney(item.savings, "₫");
                        description = "<li>Giảm " + amount + " phí vận chuyển " + "</li>";
                    } else if (item.take_type == 2) //percent
                    {
                        var amount = item.savings / 100;
                        description = "<li>Giảm " + amount + "% phí vận chuyển " + "</li>";
                    }

                } else if (item.discount_type == 4) {
                    //sameprice
                    var amount = Haravan.formatMoney(item.savings, "₫");
                    description = "<li>Đồng giá " + amount + "</li>";
                } else if (item.discount_type == 5) {
                    //order amount
                    if (item.take_type == 1) {
                        var amount = Haravan.formatMoney(item.savings, "₫");
                        strDiscountType = " <li>Giảm " + amount + "</li>";
                        description += strDiscountType;
                    } else if (item.take_type == 2) {
                        var amount = item.savings / 100;
                        strDiscountType = "<li>Giảm " + amount + "% giá trị đơn hàng</li>";
                        description += strDiscountType;
                    }

                } else if (item.discount_type == 6) {
                    //product amount
                    if (item.take_type == 1) {
                        var amount = Haravan.formatMoney(item.savings, "₫");
                        strDiscountType = " <li>Giảm " + amount + "</li>";
                        description += strDiscountType;
                    } else if (item.take_type == 2) {
                        var amount = item.savings / 100;
                        strDiscountType = "<li>Giảm " + amount + "% giá trị sản phẩm</li>";
                        description += strDiscountType;
                    }
                }

                return "<ul>" + description + "</ul>";
            }



            function getDiscountDescription(item) {
                var description = "";
                var resultDiscount = "";
                var str_max_amount_apply = "";
                var applyQuantityOrderValue = "";
                var str_LimitUsedCustomer = "";

                var applyForCustomers = "";
                var applyForProducts = "";
                var applyForProvinces = "";

                if (item.max_amount_apply > 0) {
                    var max_amount_apply = Haravan.formatMoney(item.max_amount_apply, "₫");
                    str_max_amount_apply = "<li>Tối đa " + max_amount_apply + "</li>";

                }

                if (item.customer_limit_used > 0) {
                    str_LimitUsedCustomer = "<li>Mỗi khách hàng chỉ được áp dụng " + item.customer_limit_used +
                        " lần</li>";

                }

                if (item.product_quantity > 0) {
                    var strQuantity = "<li>Mua tối thiểu " + item.product_quantity + " sản phẩm </li>";
                    applyQuantityOrderValue += strQuantity;
                }

                if (item.order_over > 0) {
                    var strAmount = "<li>Mua tối thiểu " + Haravan.formatMoney(item.order_over, "₫") + "</li>";
                    applyQuantityOrderValue += strAmount;
                }

                if (item.province_apply_type == 2) {
                    //product_prerequisite
                    applyForProvinces += "<li>Tỉnh thành áp dụng ";

                    var lstProvinces = "";
                    item.entitled_provinces.data.forEach(function(objData) {
                        var obj = objData.province;
                        var str = obj.province_name + ", ";
                        lstProvinces += str;
                    })
                    if (lstProvinces.length > 2)
                        lstProvinces = lstProvinces.substring(0, lstProvinces.length - 2);
                    applyForProvinces += lstProvinces + " </li>";
                }

                if (item.product_apply_type == 2) {
                    //product_prerequisite
                    applyForProducts += "<li>Sản phẩm ";

                    var lstProducts = "";
                    item.entitled_products.data.forEach(function(objData) {
                        var obj = objData.product;
                        var str = "<a target='blank' href='" + obj.product_url + "'>" + obj.product_title +
                            "</a> <br/>";
                        lstProducts += str;
                    })

                    applyForProducts += lstProducts + " </li>";
                } else if (item.product_apply_type == 3) {
                    //collection_prerequisite
                    applyForProducts += "<li>Nhóm sản phẩm ";

                    var lstCollections = "";
                    item.entitled_collections.data.forEach(function(objData) {
                        var obj = objData.collection;
                        var str = "<a target='blank' href='" + obj.collection_url + "'>" + obj
                            .collection_title + "</a> <br/>";
                        lstCollections += str;
                    })

                    applyForProducts += lstCollections + " </li>";
                } else if (item.product_apply_type == 4) {
                    //variant_prerequisite
                    applyForProducts += "<li>Biến thể của sản phẩm";

                    var lstVariants = "";
                    item.entitled_variants.data.forEach(function(objData) {

                        var obj = objData.variant;
                        var str = "<a target='blank' href='" + obj.product_url + "'>" + obj.product_title +
                            " (" + obj.variant_title + ")" + "</a> <br/>";
                        lstVariants += str;
                    })

                    applyForProducts += lstVariants + " </li>";
                }

                if (item.customer_apply_type == 2) {
                    //customer_prerequisite
                    applyForCustomers = "<li>Khách hàng được chỉ định</li>";
                } else if (item.customer_apply_type == 3) {
                    //customersegment_prerequisite
                    applyForCustomers = "<li>Nhóm khách hàng được chỉ định</li>";
                }




                if (item.discount_type == 4) {
                    //sameprice
                    var amount = Haravan.formatMoney(item.savings, "₫");
                    resultDiscount = "<li>Đồng giá " + amount + "</li>";

                } else if (item.discount_type == 3) {
                    //shipping
                    if (item.take_type == 1) {
                        //amount
                        var amount = Haravan.formatMoney(item.savings, "₫");
                        resultDiscount = "<li>Giảm " + amount + " phí vận chuyển" + "</li>";
                        if (item.max_shipping_fee_apply > 0) {
                            var max_shipping_fee_apply = Haravan.formatMoney(item.max_shipping_fee_apply, "₫");
                            var subItem = "<li>Không áp dụng nếu phí vận chuyển vượt quá " +
                                max_shipping_fee_apply + "</li>";
                            resultDiscount = resultDiscount + subItem;
                        }
                    } else {
                        //percentage
                        var amount = item.savings / 100;
                        resultDiscount = "<li>Giảm " + amount + "% phí vận chuyển" + "</li>";
                        if (item.max_shipping_fee_apply > 0) {
                            var max_shipping_fee_apply = Haravan.formatMoney(item.max_shipping_fee_apply, "₫");
                            var subItem = "<li>Không áp dụng nếu phí vận chuyển vượt quá " +
                                max_shipping_fee_apply + "</li>";
                            resultDiscount = resultDiscount + subItem;
                        }

                    }
                } else if (item.discount_type == 5) {
                    //order amount
                    if (item.take_type == 1) {
                        //amount
                        var amount = Haravan.formatMoney(item.savings, "₫");
                        resultDiscount = "<li>Giảm " + amount + " giá trị đơn hàng" + "</li>";

                    } else {
                        var amount = item.savings / 100;
                        resultDiscount = "<li>Giảm " + amount + "% giá trị đơn hàng" + "</li>";
                    }
                } else if (item.discount_type == 6) {

                    //product amount
                    if (item.take_type == 1) {
                        //amount
                        var amount = Haravan.formatMoney(item.savings, "₫");
                        resultDiscount = "<li>Giảm " + amount + " sản phẩm" + "</li>";
                        var str_on_every_item = "";
                        if (item.on_every_item == 'true') {
                            str_on_every_item = "<li>Áp dụng cho từng sản phẩm trong giỏ hàng</li>";
                        } else {
                            str_on_every_item = "<li>Áp dụng 1 lần cho toàn bộ đơn hàng</li>";
                        }
                        resultDiscount += str_on_every_item;
                    } else {
                        var amount = item.savings / 100;
                        resultDiscount = "<li>Giảm " + amount + "% sản phẩm" + "</li>";
                    }



                }
                description += resultDiscount;
                description += str_max_amount_apply;
                description += applyQuantityOrderValue;
                description += str_LimitUsedCustomer;
                description += applyForCustomers;
                description += applyForProducts;
                description += applyForProvinces;
                return "<ul>" + description + "</ul>";
            }


            function togglePopupCoupons() {
                if ($('.hrv-coupons-popup').hasClass('active-popup') && $('.hrv-coupons-popup-site-overlay')
                    .hasClass('active-popup')) {
                    $('.hrv-coupons-popup').removeClass('active-popup');
                    $('.hrv-coupons-popup-site-overlay').removeClass('active-popup');
                    $('[class*="hrv-discount-code-"]').removeClass('open-more');
                    if ($(window).width() < 768) {
                        $('body').css('overflow', '');
                    }
                } else {
                    $('.hrv-coupons-popup').addClass('active-popup');
                    $('.hrv-coupons-popup-site-overlay').addClass('active-popup');

                    if ($(window).width() < 768) {
                        $('body').css('overflow', 'hidden');
                    }
                }
            }

            function renderCoupons() {
                var htmlItemCoupons = "";
                var hiddenClass = "";
                $.each(dataDiscount.data, function(i, v) {
                    var couponItem = v.discount;
                    if (i >= 2) hiddenClass = 'hidden';
                    /*
                                                                		var htmlItemCoupon = `<div class="coupon_item ${hiddenClass}">
		                        <div class="coupon_icon pos-relative">
									<div class="icon-svg">
										<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 56 56"><defs><style>.cls-1{fill:#10a9f7;}.cls-2{fill:#1c70f7;}.cls-3{fill:#1f26f7;}</style></defs><path class="cls-1" d="M32.67,4.67A7,7,0,0,0,28,6.49a7,7,0,1,0-4.67,12.18h9.34a7,7,0,0,0,0-14ZM21,11.67a2.34,2.34,0,1,1,4.67,0V14H23.33A2.34,2.34,0,0,1,21,11.67ZM32.67,14H30.33V11.67A2.34,2.34,0,1,1,32.67,14Z"/><path class="cls-2" d="M44.54,25.67H11.87A2.33,2.33,0,0,0,9.54,28V49a2.36,2.36,0,0,0,2.36,2.36H44.52A2.35,2.35,0,0,0,46.87,49V28A2.33,2.33,0,0,0,44.54,25.67Z"/><path class="cls-3" d="M42,14H14a7,7,0,0,0-7,7v8.49a.84.84,0,0,0,.84.84H48.16a.84.84,0,0,0,.84-.84V21A7,7,0,0,0,42,14Z"/><path class="cls-1" d="M25.67,14h4.66V51.33H25.67Z"/></svg>
									</div>
									<div class="coupon_body">
										<div class="coupon_head">
											
											<h3 class="coupon_title"> <span>${couponItem.name}</span></h3>
											<div class="coupon_desc_short">${couponItem.highlight_note}</div>
											<div class="coupon_desc">${couponItem.description}</div>`;
                                                                		if(couponItem.description != '') htmlItemCoupon += `<div class="coupon_more">Xem chi tiết</div>`;
                                                                			htmlItemCoupon +=				`<div class="coupon_exp">${couponItem.enddate}</div>
										</div>
										<button class="btn btn_apply_line_coupon" data-code="${couponItem.name}">Áp dụng</button>
									</div>
								</div>
							  </div>`;
                                                                        */

                    var htmlItemCoupon = `<div class="coupon_item ${hiddenClass}">
		                        <div class="coupon_icon pos-relative">
									<div class="coupon_body">
										
										 <div class="coupon_head">	
											<div class="icon-svg">
												<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M28.4325 45.5026C27.418 45.5026 26.5115 44.7611 25.631 44.0411C25.093 43.6006 24.3555 42.9976 23.9995 42.9976C23.644 42.9976 22.9065 43.6006 22.3685 44.0411C21.404 44.8296 20.31 45.7261 19.1055 45.4501C17.8625 45.1676 17.254 43.8606 16.717 42.7081C16.449 42.1316 16.043 41.2601 15.7545 41.1206C15.4485 40.9711 14.4985 41.2016 13.87 41.3526C12.6465 41.6471 11.2605 41.9791 10.2805 41.1976C9.297 40.4121 9.3145 38.9816 9.331 37.7201C9.339 37.0766 9.351 36.1046 9.144 35.8446C8.9395 35.5886 7.993 35.3861 7.3665 35.2521C6.1275 34.9871 4.7245 34.6866 4.1745 33.5466C3.6325 32.4241 4.265 31.1511 4.822 30.0281C5.1115 29.4461 5.5485 28.5656 5.472 28.2281C5.403 27.9256 4.65 27.3411 4.152 26.9541C3.1435 26.1721 2 25.2841 2 24.0001C2 22.7161 3.1435 21.8286 4.1525 21.0456C4.6505 20.6591 5.4035 20.0746 5.4725 19.7716C5.549 19.4341 5.112 18.5536 4.823 17.9711C4.2655 16.8481 3.6335 15.5756 4.176 14.4521C4.726 13.3126 6.129 13.0121 7.3675 12.7471C7.994 12.6131 8.9405 12.4106 9.1445 12.1551C9.3525 11.8946 9.3405 10.9221 9.3325 10.2786C9.3165 9.01706 9.299 7.58706 10.282 6.80156C11.2615 6.01956 12.6485 6.35256 13.8715 6.64656C14.501 6.79756 15.45 7.02606 15.7555 6.87906C16.0445 6.73956 16.45 5.86856 16.7185 5.29156C17.255 4.13856 17.863 2.83206 19.106 2.54956C20.309 2.27656 21.405 3.16956 22.369 3.95856C22.9075 4.39906 23.645 5.00206 24.0005 5.00206C24.356 5.00206 25.0935 4.39906 25.6315 3.95906C26.5965 3.16956 27.69 2.27456 28.895 2.54956C30.1375 2.83206 30.746 4.13906 31.283 5.29206C31.5515 5.86856 31.957 6.74006 32.246 6.87956C32.5525 7.02706 33.501 6.79806 34.1295 6.64706C35.353 6.35306 36.7395 6.02006 37.7195 6.80206C38.703 7.58756 38.6855 9.01756 38.669 10.2796C38.661 10.9231 38.649 11.8956 38.856 12.1551C39.0605 12.4106 40.007 12.6136 40.6335 12.7476C41.8725 13.0126 43.2755 13.3126 43.8255 14.4526C44.3675 15.5756 43.735 16.8486 43.178 17.9716C42.8885 18.5541 42.4515 19.4341 42.528 19.7716C42.597 20.0746 43.35 20.6591 43.848 21.0456C44.8565 21.8286 46 22.7161 46 24.0001C46 25.2841 44.8565 26.1716 43.8475 26.9546C43.3495 27.3411 42.5965 27.9251 42.5275 28.2291C42.451 28.5666 42.888 29.4466 43.177 30.0291C43.7345 31.1521 44.3665 32.4246 43.824 33.5481C43.274 34.6876 41.871 34.9881 40.6325 35.2526C40.006 35.3871 39.0595 35.5896 38.855 35.8451C38.6475 36.1056 38.6595 37.0781 38.6675 37.7216C38.6835 38.9826 38.701 40.4126 37.718 41.1981C36.7385 41.9801 35.3515 41.6466 34.1285 41.3531C33.499 41.2021 32.55 40.9726 32.2445 41.1211C31.9555 41.2601 31.55 42.1316 31.2815 42.7081C30.745 43.8616 30.137 45.1681 28.894 45.4506C28.738 45.4861 28.584 45.5026 28.4325 45.5026ZM15.445 39.0751C15.8595 39.0751 16.257 39.1421 16.6235 39.3186C17.555 39.7676 18.051 40.8331 18.5305 41.8636C18.768 42.3736 19.262 43.4346 19.5485 43.4996C19.815 43.5466 20.685 42.8331 21.102 42.4921C22.001 41.7571 22.93 40.9971 23.9995 40.9971C25.069 40.9971 25.9985 41.7576 26.897 42.4921C27.314 42.8331 28.158 43.5326 28.4515 43.4996C28.737 43.4341 29.2315 42.3736 29.4685 41.8636C29.9475 40.8331 30.4435 39.7686 31.3755 39.3186C32.3235 38.8611 33.4775 39.1396 34.595 39.4081C35.1325 39.5371 36.253 39.8066 36.469 39.6346C36.6885 39.4596 36.674 38.3021 36.667 37.7461C36.6525 36.6001 36.6375 35.4156 37.2915 34.5966C37.9415 33.7826 39.096 33.5356 40.213 33.2966C40.76 33.1796 41.8975 32.9361 42.022 32.6786C42.138 32.4371 41.629 31.4111 41.3845 30.9181C40.872 29.8856 40.3415 28.8176 40.5765 27.7856C40.804 26.7846 41.7275 26.0676 42.62 25.3746C43.103 25.0006 44 24.3046 44 24.0001C44 23.6956 43.103 22.9996 42.621 22.6251C41.728 21.9321 40.8045 21.2156 40.577 20.2141C40.3425 19.1821 40.873 18.1141 41.3855 17.0816C41.63 16.5886 42.1395 15.5631 42.023 15.3211C41.8985 15.0631 40.761 14.8201 40.2145 14.7031C39.0975 14.4641 37.9425 14.2171 37.2925 13.4036C36.639 12.5851 36.654 11.4001 36.6685 10.2546C36.6755 9.69856 36.69 8.54056 36.4705 8.36556C36.2555 8.19356 35.1345 8.46306 34.596 8.59206C33.479 8.86056 32.325 9.13856 31.3765 8.68106C30.445 8.23156 29.949 7.16656 29.4695 6.13656C29.232 5.62656 28.7385 4.56556 28.4515 4.50056C28.1765 4.45306 27.3145 5.16706 26.8975 5.50756C25.999 6.24306 25.07 7.00306 24.0005 7.00306C22.931 7.00306 22.002 6.24256 21.103 5.50756C20.686 5.16656 19.816 4.45606 19.5485 4.50006C19.2625 4.56506 18.768 5.62606 18.531 6.13606C18.0515 7.16606 17.556 8.23106 16.6245 8.68056C15.6765 9.13756 14.5225 8.86056 13.4045 8.59156C12.867 8.46206 11.7455 8.19306 11.5305 8.36456C11.311 8.54006 11.3255 9.69756 11.3325 10.2536C11.347 11.3996 11.362 12.5846 10.708 13.4026C10.058 14.2166 8.9035 14.4636 7.7865 14.7026C7.2395 14.8196 6.102 15.0631 5.9775 15.3206C5.8615 15.5621 6.3705 16.5881 6.615 17.0811C7.1275 18.1136 7.658 19.1816 7.423 20.2136C7.1955 21.2146 6.272 21.9316 5.3795 22.6246C4.897 22.9996 4 23.6956 4 24.0001C4 24.3046 4.897 25.0011 5.379 25.3751C6.272 26.0681 7.1955 26.7841 7.423 27.7856C7.6575 28.8176 7.127 29.8851 6.6145 30.9181C6.37 31.4111 5.8605 32.4366 5.977 32.6786C6.1015 32.9371 7.239 33.1801 7.786 33.2971C8.9025 33.5361 10.0575 33.7831 10.7075 34.5971C11.361 35.4156 11.346 36.6001 11.3315 37.7461C11.3245 38.3021 11.31 39.4601 11.5295 39.6351C11.7445 39.8046 12.8655 39.5376 13.404 39.4081C14.0885 39.2431 14.788 39.0751 15.445 39.0751Z" fill="#F47560"/>
<path d="M18.207 32.207L32.207 18.207C32.5975 17.8165 32.5975 17.1835 32.207 16.793C31.8165 16.4025 31.1835 16.4025 30.793 16.793L16.793 30.793C16.4025 31.1835 16.4025 31.8165 16.793 32.207C16.9885 32.4025 17.244 32.5 17.5 32.5C17.756 32.5 18.0115 32.4025 18.207 32.207ZM19.5 23C17.5705 23 16 21.43 16 19.5C16 17.57 17.5705 16 19.5 16C21.4295 16 23 17.57 23 19.5C23 21.43 21.4295 23 19.5 23ZM19.5 18C18.673 18 18 18.673 18 19.5C18 20.327 18.673 21 19.5 21C20.327 21 21 20.327 21 19.5C21 18.673 20.327 18 19.5 18ZM29.5 33C27.5705 33 26 31.4295 26 29.5C26 27.5705 27.5705 26 29.5 26C31.4295 26 33 27.5705 33 29.5C33 31.4295 31.4295 33 29.5 33ZM29.5 28C28.673 28 28 28.673 28 29.5C28 30.327 28.673 31 29.5 31C30.327 31 31 30.327 31 29.5C31 28.673 30.327 28 29.5 28Z" fill="#F47560"/>
</svg>
											</div>
											<h3 class="coupon_title"> 
												<span>${couponItem.name}</span>
												<div class="coupon_exp">${couponItem.enddate}</b></div>
											</h3>
										 </div>`;
                    if (couponItem.highlight_note != '') htmlItemCoupon +=
                        `<div class="coupon_desc_short">${couponItem.highlight_note}</div>`;
                    if (couponItem.description != '') htmlItemCoupon +=
                        `<div class="coupon_desc">${couponItem.description}</div>`;
                    htmlItemCoupon += `			 <div class="coupon_actions">
										    <div class="coupon_more">Xem chi tiết<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
										    <button class="btn btn_apply_line_coupon" data-code="${couponItem.name}">Áp dụng</button>
										 </div>
									</div>
								 </div>
							  </div>`;

                    htmlItemCoupons = htmlItemCoupons + htmlItemCoupon;
                });

                if (hiddenClass != '') {
                    var htmlMoreCoupon = `<div class="text-center">
								<button id="show_all_coupon">
									<span>Xem thêm</span>
									<span id="show_all_icon">
									<svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
<path d="M11.3337 5.99984L10.3937 5.05984L6.66699 8.77984V0.666504H5.33366V8.77984L1.61366 5.05317L0.666992 5.99984L6.00033 11.3332L11.3337 5.99984Z"/>
</svg>
                                    </span>
								</button>
							  </div>`;
                    htmlItemCoupons += htmlMoreCoupon;
                }
                $('.hrv-discount-code-web').html(htmlItemCoupons);
            }

            $(document).on('click', '#show_all_coupon', function() {
                var coupons = $('.coupon_item').length;
                var parentDOM = $(this).parents('div[class*="hrv-discount-code-"]');
                if (!parentDOM.hasClass('open-more')) {
                    parentDOM.find('.coupon_item').removeClass('hidden');
                    parentDOM.addClass('open-more');
                    $(this).find('span:first-child').html('Thu gọn');
                } else {
                    parentDOM.find('.coupon_item:nth-child(n+3):nth-child(-n+' + coupons + ')').addClass(
                        'hidden');
                    parentDOM.removeClass('open-more');
                    $(this).find('span:first-child').html('Xem thêm');
                }
            });

            $('body').on('click', '.order-summary-section-display-discount .hrv-discount-choose-coupons',
                function() {
                    togglePopupCoupons();
                    renderCoupons();
                })

            $('body').on('click', '.hrv-coupons-close-popup svg', function() {
                togglePopupCoupons();
            })

            $('body').on('click', '.hrv-discount-code-web .btn_apply_line_coupon', function() {
                var codeCoupons = $(this).data('code');
                togglePopupCoupons();
                $('input[id="discount.code"]').val(codeCoupons).trigger("change");
                $('form#form_discount_add button.field-input-btn.btn.btn-default').removeClass(
                    'btn-disabled');
                $('form#form_discount_add button.field-input-btn.btn.btn-default').trigger('click');
            })

            $('body').on('click', '.coupon_layer', function() {
                $(this).siblings('.btn_apply_line_coupon').trigger('click');
            });

            $(document).on('click', '.coupon_more', function() {
                $(this).parent().siblings('.coupon_desc_short').toggleClass('close');
                $(this).toggleClass('open');
            });

            $(document).on('click', '.hrv-coupons-popup-site-overlay', function() {
                togglePopupCoupons();
            });
        })


        var isFirstLoadTime = true;
        var siteKey = "6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-";
        var isUseCaptchaCheckout = false

        if (isUseCaptchaCheckout == true) {

        }
    </script>

</body>

</html>
