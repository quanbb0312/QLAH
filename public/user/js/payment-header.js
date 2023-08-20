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

window.onpageshow = function(event) {
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

var toggleShowOrderSummary = false;


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

window.HaravanAnalytics.ga4 = "G-24C1XZ9BDQ";
window.HaravanAnalytics.enhancedEcommercev4 = true;
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-24C1XZ9BDQ');