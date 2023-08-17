<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
    <link rel="shortcut icon" href="//theme.hstatic.net/200000680123/1001107404/14/favicon.png?v=47" type="image/png">
    <title>
        TITEK - Thanh toán đơn hàng
    </title>

    <meta name="description" content="TITEK - Thanh toán đơn hàng">






    <style>
        .btn {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 1.4em 1.7em;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            position: relative;
            background: #338dbc;
            color: white;
        }

        .fieldset .field .field-input-wrapper .field-input {
            box-shadow: 0 0 0 1px #d9d9d9;
            transition: all 0.2s ease-out;
            background-color: white;
            color: #333333;
            border-radius: 4px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 0.94em 2.8em 0.94em 0.8em;
            word-break: normal;
        }

        body {
            color: #737373;
            background: white !important;

            font-size: 14px;
            font-family: Helvetica Neue, sans-serif;
            line-height: 1.3em;
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;
            -webkit-font-smoothing: subpixel-antialiased;
            overflow-x: hidden;
        }

        .fieldset .field .field-input-wrapper .field-input:focus {
            box-shadow: 0 0 0 2px #338dbc;
            outline: none;
        }

        .radio-wrapper .radio-input .input-radio:checked,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked {
            border: none;
            box-shadow: 0 0 0 10px #338dbc inset;
        }

        .fieldset .field.field-error .field-input-wrapper .field-input {
            box-shadow: 0 0 0 2px #ff6d6d;
            outline: none;
        }

        html,
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            /* == 2 => 1 page, == 1 => 2 page*/
        }





        a {
            text-decoration: none;
            color: #338dbc;
            transition: color 0.2s ease-in-out;
            display: inline-block;
        }

        .banner {
            padding: 1.5em 0;

            display: none;
            ;
        }

        .alert {
            padding: 16px;
            border-radius: 5px;
            display: -webkit-flex;
            display: flex;
            align-items: center;
        }


        .alert-danger svg {
            width: 20px;
            margin-right: 10px;
        }

        .alert-danger span {
            max-width: calc(100% - 30px);
        }

        .alert-danger * {
            flex: 0 0 auto;
        }

        .alert-danger {
            color: #721c24;
            background-color: #ffebeb;
            border-color: #ffebeb;
            line-height: 20px;
        }

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }


        a:focus {
            outline: none;
        }

        a:hover {
            /* color: #2b78a0; */
            filter: brightness(1.2);
        }

        ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: normal;
            margin: 0;
            line-height: 1em;
        }

        h2 {
            font-size: 1.28571em;
        }

        h3 {
            font-size: 1em;
            font-weight: 500;
            margin-bottom: 0.75em;
        }

        h3:not(:first-child) {
            margin-top: 1.5em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 1em;
        }

        td,
        th {
            padding: 0;
            padding-left: 1em;
        }

        td:first-child,
        th:first-child {
            padding-left: 0;
            text-align: left;
        }

        td:last-child,
        th:last-child {
            text-align: right;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        p {
            margin: 0;
            line-height: 1.5em;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
            padding: 0;
            -webkit-appearance: none;
            -webkit-font-smoothing: inherit;
            border: none;
            background: transparent;
            line-height: normal;
        }

        button:focus,
        input:focus {
            outline: none;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .radio-wrapper,
        .checkbox-wrapper {
            display: table;
            box-sizing: border-box;
            width: 100%;
            zoom: 1;
        }

        .radio-wrapper:after,
        .radio-wrapper:before,
        .checkbox-wrapper:after,
        .checkbox-wrapper:before {
            content: "";
            display: table;
        }

        .radio-wrapper .radio-input,
        .checkbox-wrapper .checkbox-input {
            display: table-cell;
            padding-right: 0.75em;
            white-space: nowrap;
        }

        .radio-wrapper .payment-method-checkbox {
            display: flex;
            align-self: center;
        }

        .radio-wrapper .radio-input .input-radio,
        .checkbox-wrapper .checkbox-input .input-checkbox {
            width: 18px;
            height: 18px;
            box-shadow: 0 0 0 0 #338dbc inset;
            transition: all 0.2s ease-in-out;
            position: relative;
            cursor: pointer;
            vertical-align: -4px;
            outline: 0;
            border: solid 1px #d9d9d9;
        }

        .radio-wrapper .radio-input .input-radio:hover,
        .checkbox-wrapper .checkbox-input .input-checkbox:hover {
            border-color: #cccccc;
        }

        .radio-wrapper .radio-input .input-radio {
            border-radius: 50%;
        }

        .radio-wrapper .radio-content-input {
            display: flex;
            align-items: center;
        }

        .radio-content-input .content-wrapper {
            display: grid
        }

        .radio-wrapper .radio-content-input .main-img {
            margin-right: 10px;
            display: flex;
            align-self: center;
            width: 40px;
            height: 40px;
        }

        .radio-wrapper .radio-content-input .child-img {
            max-height: 30px
        }

        .radio-wrapper .radio-content-input .quick-tagline {
            color: #338dbc;
            display: flex;
            align-items: center;
            margin-top: 2px;
        }

        .radio-wrapper .radio-content-input .quick-tagline svg {
            fill: #338dbc;
            margin-left: 10px;
        }

        .radio-wrapper .radio-input .input-radio:checked:focus,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked:focus {
            border-color: #286f94;
        }

        .radio-wrapper .radio-input .input-radio:checked:after,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked:after {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
            filter: alpha(opacity=100);
        }

        .radio-wrapper .radio-input .input-radio:after,
        .checkbox-wrapper .checkbox-input .input-checkbox:after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: scale(0.2);
            transform: scale(0.2);
            transition: all 0.2s ease-in-out 0.1s;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
            filter: alpha(opacity=0);
        }

        .radio-wrapper .radio-input .input-radio:after {
            width: 4px;
            height: 4px;
            margin-left: -2px;
            margin-top: -2px;
            background-color: #fff;
            border-radius: 50%;
        }

        .radio-wrapper .radio-label,
        .checkbox-wrapper .checkbox-label {
            display: flex !important;
            cursor: pointer !important;
            align-items: center;
            padding: 1.3em;
            width: auto;
        }

        .radio-wrapper .two-page,
        .checkbox-wrapper .checkbox-label {
            display: flex;
            cursor: pointer;
            align-items: center;
            padding: 1.3em;
            width: auto;
        }

        .radio-wrapper .radio-label .radio-label-primary,
        .checkbox-wrapper .checkbox-label .checkbox-label-primary {
            display: table-cell;
            width: 100%;
        }

        .radio-wrapper .radio-accessory,
        .checkbox-wrapper .checkbox-accessory {
            display: table-cell;
            padding-left: 0.75em;
            white-space: nowrap;
        }

        .radio-wrapper.no-box,
        .checkbox-wrapper.no-box {
            display: block;
        }

        .radio-wrapper.no-box .radio-input,
        .checkbox-wrapper.no-box .checkbox-input {
            display: inline-block;
        }

        .radio-wrapper.no-box .radio-label,
        .checkbox-wrapper.no-box .checkbox-label {
            display: inline-block;
            width: inherit;
        }

        ::selection {
            background: #338dbc;
            color: white;
        }


        .btn:not(.btn-disabled):hover {
            /* background: #286f94; */
            color: white;
            filter: brightness(1.2);
        }



        .btn-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -10px;
            /*transition: opacity 0.3s ease-in-out;*/
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
            filter: alpha(opacity=0);
        }

        .btn-loading {
            pointer-events: none;
            cursor: default;
        }

        .btn-loading .btn-content {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
            filter: alpha(opacity=0);
        }

        .btn-loading .btn-spinner {
            -webkit-animation: rotate 0.5s linear infinite;
            animation: rotate 0.5s linear infinite;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
            filter: alpha(opacity=100);
        }

        #div_location_country_not_vietnam {
            display: none;
        }

        div#section-shipping-rate,
        #section-payment-method {
            position: relative;
        }

        .icon {
            background-position: center center;
            background-repeat: no-repeat;
            display: inline-block;
        }

        .icon.icon-button-spinner {
            width: 20px;
            height: 20px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PHBhdGggZD0iTTIwIDEwYzAgNS41MjMtNC40NzcgMTAtMTAgMTBTMCAxNS41MjMgMCAxMCA0LjQ3NyAwIDEwIDB2MmMtNC40MTggMC04IDMuNTgyLTggOHMzLjU4MiA4IDggOCA4LTMuNTgyIDgtOGgyeiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=='), none;
        }

        .icon.icon-clear {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMiAtNCAxNiAxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAyIC00IDE2IDE2Ij48cGF0aCBvcGFjaXR5PSIuMiIgZD0iTTEwLTRjLTQuNCAwLTggMy42LTggOHMzLjYgOCA4IDggOC0zLjYgOC04LTMuNi04LTgtOHptMy43IDEwLjdsLTEgMS0yLjctMi42LTIuNyAyLjYtMS0xIDIuNi0yLjctMi42LTIuNyAxLTEgMi43IDIuNiAyLjctMi42IDEgMS0yLjYgMi43IDIuNiAyLjd6Ii8+PC9zdmc+'), none;
        }

        .icon.icon-os-question {
            width: 18px;
            height: 18px;
            margin-right: 0.5em;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDE4IDE4Ij48cGF0aCBkPSJNOSAxOGM0Ljk3IDAgOS00LjAzIDktOXMtNC4wMy05LTktOS05IDQuMDMtOSA5IDQuMDMgOSA5IDl6TTUuODUgNy4xNjJoMS41NDZjLjA1My0uODAzLjYtMS4zMTcgMS40NS0xLjMxNy44MjggMCAxLjM4LjQ5NCAxLjM4IDEuMTggMCAuNjUtLjI3NSAxLTEuMDkyIDEuNDkzLS45MDguNTM0LTEuMjkgMS4xMjYtMS4yMyAyLjExNGwuMDA2LjQ0OGgxLjUyN3YtLjM3NmMwLS42NS4yNDQtLjk4NyAxLjEwNi0xLjQ5NC44OTYtLjUzNCAxLjM5Ni0xLjIzOCAxLjM5Ni0yLjI0NiAwLTEuNDU1LTEuMjA3LTIuNDk1LTMuMDEtMi40OTUtMS45NTUgMC0zLjAzIDEuMTMtMy4wOCAyLjY5em0yLjg5NiA3LjA1OGMuNjcyIDAgMS4wOTMtLjQxNCAxLjA5My0xLjA0NiAwLS42NC0uNDIzLTEuMDU0LTEuMDk1LTEuMDU0LS42NiAwLTEuMDkzLjQxNS0xLjA5MyAxLjA1NCAwIC42MzIuNDM0IDEuMDQ2IDEuMDkzIDEuMDQ2eiIgZmlsbD0iI0I1QjVCNSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+'), none;
        }

        .icon.icon-closed-box {
            width: 68px;
            height: 54px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2OCIgaGVpZ2h0PSI1NCIgdmlld0JveD0iMjQuMSAtMTcgNjggNTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMSAtMTcgNjggNTQiPjxwYXRoIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiIGQ9Ik0yNS4xLTVoNjZNMzIuMSAyOGgxNk0zMi4xIDIzaDEyIi8+PHBhdGggc3Ryb2tlPSIjQjJCMkIyIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI1LjEtNS40bDYuNy0xMC42aDUyLjlsNi40IDEwLjZ2MzguNmMwIDEuNi0xLjIgMi44LTIuOCAyLjhoLTYwLjRjLTEuNiAwLTIuOC0xLjItMi44LTIuOHYtMzguNnpNNTguMS0xNnYxMSIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
        }

        .icon.icon-closed-box.has-error {
            width: 68px;
            height: 54px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2OCIgaGVpZ2h0PSI1NCIgdmlld0JveD0iMjQuMSAtMTcgNjggNTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMSAtMTcgNjggNTQiPjxwYXRoIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiIGQ9Ik0yNS4xLTVoNjZNMzIuMSAyOGgxNk0zMi4xIDIzaDEyIi8+PHBhdGggc3Ryb2tlPSIjZmY2ZDZkIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI1LjEtNS40bDYuNy0xMC42aDUyLjlsNi40IDEwLjZ2MzguNmMwIDEuNi0xLjIgMi44LTIuOCAyLjhoLTYwLjRjLTEuNiAwLTIuOC0xLjItMi44LTIuOHYtMzguNnpNNTguMS0xNnYxMSIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
        }

        .flexbox {}

        .flexbox body,
        .flexbox .content,
        .flexbox .content .wrap,
        .flexbox .main {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .flexbox .main-content {
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .step-footer {
            z-index: 2;
            position: relative;
            margin-top: 1em;
            zoom: 1;
        }

        .step-footer:after,
        .step-footer:before {
            content: "";
            display: table;
        }

        .step-footer:after {
            clear: both;
        }

        .step-footer .step-footer-previous-link {
            cursor: pointer;
            display: block;
        }

        .step-footer .step-footer-previous-link .previous-link-icon {
            fill: #338dbc;
            transition: all 0.2s cubic-bezier(0.3, 0, 0, 1);
            margin-right: 0.25em;
        }

        .step-footer .step-footer-previous-link:hover .previous-link-icon {
            fill: #2b78a0;
            -webkit-transform: translateX(-5px);
            transform: translateX(-5px);
        }

        .step-footer .step-footer-info {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .content {
            overflow-x: hidden;
        }

        .content.content-second {
            display: none;
        }

        .section {
            position: relative;
            padding-top: 2em;
        }

        .section.thank-you-checkout-info {
            padding-top: 0.5em;
        }

        .section:first-child {
            padding-top: 0;
        }

        .section .section-header {
            position: relative;
        }

        .section .section-content {
            zoom: 1;
            margin-bottom: 2em;
        }

        .section .section-content .section-content-text {
            margin-bottom: 0.75em;
        }

        .section .section-content.no-mb,
        .section .section-content:last-child {
            margin-bottom: inherit;
        }

        .section .section-content:after,
        .section .section-content:before {
            content: "";
            display: table;
        }

        .section .section-content .content-box {
            box-shadow: 0 0 0 1px #d9d9d9;
            border-radius: 4px;
            background: #fff;
            color: #737373;
            margin-top: 1em;
        }

        .section .section-content .content-box.has-error {
            box-shadow: 0 0 0 2px #ff6d6d;
            color: #ff6d6d;
        }

        .section .section-content .content-box.no-border {
            box-shadow: none;
        }

        .section .section-content .content-box:first-child {
            margin-top: 0;
        }

        .section .section-content .content-box .content-box-row {
            display: table;
            box-sizing: border-box;
            width: 100%;
            border-top: 1px solid #d9d9d9;
            zoom: 1;
        }

        .section .section-content .content-box .content-box-row.content-box-row-padding {
            padding: 0.8em 0.6em;
        }

        .section .section-content .content-box .content-box-row:first-child {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-top: none;
        }

        .section .section-content .content-box .content-box-row:last-child {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .section .section-content .content-box .content-box-row:after,
        .section .section-content .content-box .content-box-row:before {
            content: "";
            display: table;
        }

        .section .section-content .content-box .content-box-row.content-box-row-secondary {
            background-color: #fafafa;
        }

        .section .section-content .content-box .content-box-row.content-box-row-no-border {
            padding-bottom: 0;
        }

        .section .section-content .content-box .content-box-row.content-box-row-no-border+.content-box-row {
            border-top: none !important;
        }

        .section .section-content .content-box .content-box-emphasis {
            font-weight: 500;
            color: #4d4d4d;
        }

        .section .section-content .content-box h3 {
            color: #4d4d4d;
        }

        .section .section-content .content-box h2 {
            color: #333333;
        }

        .section .section-content .content-box h2:only-child {
            margin: 0;
        }

        .section .section-title {
            color: #333333;


        }

        .payment-later-table,
        .payment-later-table>table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            box-shadow: 0px 0px 5px rgb(10 31 68 / 21%);
            border-radius: 9px;
            background-color: #FFFFFF;
        }

        .paylater--text {
            color: #ACA9A9;
        }

        .paylater--h4 {
            padding-top: 1em;
        }

        .payment-later-table--loading {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            box-shadow: 0px 0px 5px rgb(10 31 68 / 21%);
            border-radius: 9px;
            background-color: #FFFFFF;
            display: none;
        }

        .payment-later-table--loading.show {
            display: block;
        }

        .payment-later-table>table th {
            text-align: center;
            padding: 16px;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            color: #338DBC;
        }

        .payment-later-table>table th:first-child {
            text-align: left;
            border-top-left-radius: 9px;
            border: 1px;
        }

        .payment-later-table>table th:last-child {
            text-align: right;
            border-top-right-radius: 9px;
            border: 1px;
        }

        .payment-later-table>table td {
            text-align: center;
            padding: 16px;
            font-weight: 500;
        }

        .payment-later-table>table td:first-child {
            text-align: left;
        }

        .payment-later-table>table td:last-child {
            text-align: right;
            padding: 16px;
        }

        .payment-later-table>table tr:nth-child(odd) {
            background-color: #D9D9D9;
        }


        .fieldset {
            margin: -0.45em;
            zoom: 1;
        }

        .fieldset:after,
        .fieldset:before {
            content: "";
            display: table;
        }

        .fieldset:after {
            clear: both;
        }

        .fieldset .field {
            width: 100%;
            float: left;
            padding: 0.45em;
            box-sizing: border-box;
        }

        .fieldset .field .field-input-btn-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .fieldset .field .field-input-btn-wrapper .field-input-btn {
            width: auto;
            margin-left: 0.9em;
            white-space: nowrap;
            padding-top: 0;
            padding-bottom: 0;
        }

        .fieldset .field .field-input-btn-wrapper .field-input-wrapper {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .fieldset .field .field-input-wrapper {
            position: relative;
        }

        .fieldset .field .field-input-wrapper .field-label {
            font-size: 0.85714em;
            font-weight: normal;
            position: absolute;
            top: 0;
            width: 100%;
            padding: 0 0.93333em;
            z-index: 1;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transform: translateY(3px);
            transform: translateY(3px);
            pointer-events: none;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            box-sizing: border-box;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
            filter: alpha(opacity=0);
            color: #999999;
            transition: all 0.2s ease-out;
            margin: 0.5em 0;
            margin-top: 0.3em;
            display: block;
        }




        .fieldset .field .field-input-wrapper .field-description {
            display: block;
            margin-left: 25px;
            margin-top: 2px;
        }

        .fieldset .field .field-input-wrapper.field-input-wrapper-select {}

        .fieldset .field .field-input-wrapper.field-input-wrapper-select::before {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMSIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDIxIDE5Ij48dGl0bGU+QXJ0Ym9hcmQgMTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjMDAwIj48Zz48cGF0aCBkPSJNMCAwaDF2MTlIMFYweiIgaWQ9IlNoYXBlIiBmaWxsLW9wYWNpdHk9Ii4xNSIvPjxwYXRoIGQ9Ik0xMSA4aDEwbC01IDUtNS01eiIgZmlsbC1vcGFjaXR5PSIuNSIvPjwvZz48L2c+PC9nPjwvc3ZnPg=='), none;
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 50px;
            background-position: center center;
            background-repeat: no-repeat;
            pointer-events: none;
        }

        .fieldset .field .field-message {
            font-size: 0.85714em;
        }

        .fieldset .field .field-message.field-message-error {
            margin: 0;
            display: none;
            margin: 0.75em 0 0.25em;
            transition: all 0.3s ease-out;
            line-height: 1.3em;
            color: #ff6d6d
        }

        .fieldset .field.field-active {}

        .fieldset .field.field-active .field-input-wrapper .field-label {
            color: #737373;
        }

        .fieldset .field.field-show-floating-label {}

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-label {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
            filter: alpha(opacity=100);
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input {
            padding-top: 1.5em;
            padding-bottom: 0.38em;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-webkit-input-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-ms-input-placeholder {
            color: transparent;
        }

        .fieldset .field.field-error {}

        .fieldset .field.field-error .field-input-wrapper {}

        .fieldset .field.field-error .field-message.field-message-error {
            display: block;
        }

        .wrap {
            margin: 0 auto;
            max-width: 40em;
            zoom: 1;
        }

        .wrap:after {
            clear: both;
        }

        .wrap:after,
        .wrap:before {
            content: "";
            display: table;
        }

        .sidebar {
            position: relative;
            color: #717171;
        }

        .sidebar h2 {
            color: #323232;
        }

        .sidebar:after {
            content: "";
            display: block;
            width: 300%;
            position: absolute;
            top: 0;
            left: -100%;
            bottom: 0;
            background: #fafafa;

            z-index: -1;
            box-shadow: 0 -1px 0 #e1e1e1 inset;
        }

        .sidebar .sidebar-content {}

        .sidebar .sidebar-content .order-summary {}

        .sidebar .sidebar-content .order-summary .order-summary-sections {}

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section {
            border-top: 1px solid;
            padding-top: 1.5em;
            padding-bottom: 1em;
            border-color: #e1e1e1;
        }

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
            border-top: none;
        }

        .sidebar .sidebar-content .order-summary .order-summary-emphasis {
            font-weight: 500;
            color: #4b4b4b;
        }

        .sidebar .sidebar-content .order-summary .order-summary-small-text {
            font-size: 0.85714em;
            color: #969696;
        }

        .sidebar .sidebar-content .order-summary .product {}

        .sidebar .sidebar-content .order-summary .product:first-child td {
            padding-top: 0;
        }

        .sidebar .sidebar-content .order-summary .product td {
            padding-top: 1em;
        }

        .sidebar .sidebar-content .order-summary .product .product-image {}

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail {
            width: 4.6em;
            height: 4.6em;
            border-radius: 8px;
            background: #fff;
            position: relative;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-wrapper .product-thumbnail-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-quantity {
            font-size: 0.85714em;
            font-weight: 500;
            white-space: nowrap;
            padding: 0.15em 0.65em;
            border-radius: 2em;
            background-color: rgba(153, 153, 153, 0.9);
            color: #fff;
            position: absolute;
            right: -0.75em;
            top: -0.75em;
            z-index: 2;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail::after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            border-radius: 8px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
        }

        .sidebar .sidebar-content .order-summary .product .product-description {
            width: 100%;
        }

        .sidebar .sidebar-content .order-summary .product .product-description .product-description-name,
        .sidebar .sidebar-content .order-summary .product .product-description .product-description-variant,
        .sidebar .sidebar-content .order-summary .product .product-description .product-description-property {
            display: block;
        }

        .sidebar .sidebar-content .order-summary .product .product-quantity {}

        .sidebar .sidebar-content .order-summary .product .product-price {
            white-space: nowrap;
        }

        .sidebar .btn-disabled {
            cursor: default;
            background: #c8c8c8;
            box-shadow: none;
        }


        .logo-text {
            color: #333333;
        }

        .main {}

        .main .main-header {}

        .main .main-header .logo {
            display: none;
        }

        .main .main-header .breadcrumb {}

        .main .main-header .breadcrumb .breadcrumb-item {
            display: inline-block;
            font-size: 0.85714em;
            color: #999999;
        }

        .main .main-header .breadcrumb .breadcrumb-item.breadcrumb-item-current {
            font-weight: 500;
            color: #4d4d4d;
        }

        .main .main-header .breadcrumb .breadcrumb-item:after {
            content: "";
            display: inline-block;
            width: 6px;
            height: 11px;
            vertical-align: middle;
            margin: 0 0.5em;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2IiBoZWlnaHQ9IjExIiBvcGFjaXR5PSIuNCIgZmlsbD0iIzAwMCI+PHBhdGggZD0iTS41MjYgMS40MDhsNCA0LjY0NS4wMTQtLjgzLTQgNC4zNTQuOTIuODQ2IDQtNC4zNTYuMzc2LS40MS0uMzYyLS40Mi00LTQuNjQ1LS45NDguODE2eiIvPjwvc3ZnPg=='), none;
        }

        .main .main-header .breadcrumb .breadcrumb-item:last-child:after {
            display: none;
        }

        .main .main-header .breadcrumb .breadcrumb-item .breadcrumb-link {
            cursor: pointer;
        }

        .main .main-footer {
            padding: 1em 0;
            border-top: 1px solid #e6e6e6;
        }

        .main h2 {
            color: #333333;
        }

        .field-label-strong {
            font-weight: 600;
        }

        .ctrl_payment_method {
            padding: 10px 60px;
        }

        .ctrl_payment_method>label {
            margin-bottom: 5px;
            display: block;
        }

        .ctrl_payment_method .payment_method_list {
            padding-left: 10px;
        }

        .total-line {}

        .total-line td {
            padding-top: 0.75em;
        }

        .total-line-table-footer .total-line td {
            padding-top: 3em;
            position: relative;
        }

        .total-line-table-footer .total-line td::before {
            background-color: #e1e1e1;
            content: '';
            position: absolute;
            top: 1.5em;
            left: 0;
            width: 100%;
            height: 1px;
        }

        .payment-due-label {}

        .payment-due-label .payment-due-label-total {
            font-size: 1.14286em;
            color: #4b4b4b;
        }

        .payment-due {}

        .payment-due .payment-due-currency {
            font-size: 0.85714em;
            vertical-align: 0.2em;
            margin-right: 0.5em;
            color: #969696;
        }

        .payment-due .payment-due-price {
            font-size: 1.71429em;
            font-weight: 500;
            letter-spacing: -0.04em;
            color: #4b4b4b;
            line-height: 1em;
        }

        .applied-reduction-code {
            margin-left: 0.5em;
        }

        .applied-reduction-code .applied-reduction-code-icon {
            fill: #338dbc;
            vertical-align: middle;
            margin-right: 0.14286em;
        }

        .applied-reduction-code .applied-reduction-code-information {
            font-size: 0.85714em;
            color: #338dbc;
            font-weight: 500;
        }

        .applied-reduction-code-clear-button {
            vertical-align: middle;
            margin-left: 0.28571em;
        }

        .hanging-icon {
            margin-right: 0.75em;
            stroke: #338dbc;
        }

        .hanging-icon.hanging-icon-error {
            stroke: #ff6d6d;
        }

        .os-header {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0;
        }

        .os-header .os-header-heading {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .os-header .os-header-heading .os-order-number {
            display: block;
        }

        .os-header .os-header-heading .os-header-title {
            font-size: 1.5em;
            margin-bottom: 0.1em;
        }

        .os-header .os-header-heading .os-description {
            color: #4d4d4d;
        }

        .wrap {
            margin: 0 auto;
            max-width: 40em;
            zoom: 1;
        }

        .wrap:after,
        .wrap:before {
            content: "";
            display: table;
        }

        .order-summary-toggle {
            background: #fafafa;
            border-top: 1px solid #e6e6e6;
            border-bottom: 1px solid #e6e6e6;
            padding: 1.25em 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            text-align: left;
            width: 100%;
        }

        .order-summary-toggle .order-summary-toggle-inner {
            display: table;
            box-sizing: border-box;
            width: 100%;
            zoom: 1;
        }

        .order-summary-toggle .order-summary-toggle-inner:after,
        .order-summary-toggle .order-summary-toggle-inner:before {
            content: "";
            display: table;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-icon-wrapper {
            display: table-cell;
            vertical-align: middle;
            padding-right: 0.75em;
            white-space: nowrap;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-icon-wrapper .order-summary-toggle-icon {
            fill: #338dbc;
            transition: fill 0.2s ease-in-out;
        }



        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-text {
            color: #338dbc;
            vertical-align: middle;
            transition: color 0.2s ease-in-out;
            display: none;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-text .order-summary-toggle-dropdown {
            vertical-align: middle;
            transition: fill 0.2s ease-in-out;
            fill: #338dbc;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-total-recap {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
            padding-left: 0.75em;
            white-space: nowrap;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-total-recap .total-recap-final-price {
            font-size: 1.28571em;
            line-height: 1em;
            color: #4d4d4d;
        }

        .order-summary-toggle.order-summary-toggle-show {}

        .order-summary-toggle.order-summary-toggle-hide .order-summary-toggle-inner .order-summary-toggle-text.order-summary-toggle-text-show,
        .order-summary-toggle.order-summary-toggle-show .order-summary-toggle-inner .order-summary-toggle-text.order-summary-toggle-text-hide {
            display: table-cell;
            width: 100%;
        }

        .logged-in-customer-information {
            display: table;
            box-sizing: border-box;
            width: 100%;
            margin-bottom: 1.5em;
        }

        .logged-in-customer-information:after,
        .logged-in-customer-information:before {
            content: "";
            display: table;
        }

        .logged-in-customer-information .logged-in-customer-information-avatar-wrapper {
            display: table-cell;
            padding-right: 1em;
            white-space: nowrap;
            vertical-align: middle;
        }

        .logged-in-customer-information .logged-in-customer-information-avatar-wrapper .logged-in-customer-information-avatar {
            border-radius: 8px;
            background-size: cover;
            position: relative;
            max-width: none;
            width: 50px;
            height: 50px;
            overflow: hidden;
        }

        .logged-in-customer-information .logged-in-customer-information-avatar-wrapper .logged-in-customer-information-avatar:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgdmlld0JveD0iMCAwIDUwIDUwIj48dGl0bGU+QXJ0Ym9hcmQ8L3RpdGxlPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTAgMGg1MHY1MEgwVjB6IiBmaWxsPSIjRDhEOEQ4Ii8+PHBhdGggZD0iTTI1LjEwMyAyNi4yNDJjMy4yMTIgMCA1LjY0Mi0yLjkyIDUuNjQyLTYuNzg3IDAtMy4wODYtMi41OC01LjcwNS01LjY0Mi01LjcwNS0zLjA2IDAtNS42NCAyLjYyLTUuNjQgNS43MDUgMCAzLjg2NiAyLjQzIDYuNzg3IDUuNjQgNi43ODd6bTAtMTAuNTRjMS45NTIgMCAzLjY3OCAxLjc2MyAzLjY3OCAzLjc1MyAwIDIuNzU3LTEuNTc0IDQuODM1LTMuNjc3IDQuODM1LTIuMTAzIDAtMy42NzctMi4wNzgtMy42NzctNC44MzUgMC0xLjk5IDEuNzI2LTMuNzUzIDMuNjc3LTMuNzUzem0tOC40NSAyMC42MTVsLjE3Ny0xLjg3N2MuMzktMy43NzggNC42OTctNC42MSA4LjI3My00LjYxIDMuNTc3IDAgNy44ODQuODMyIDguMjc0IDQuNTk4bC4xNzYgMS44OWgyLjAxNWwtLjE3Ni0yLjA4Yy0uNDQtNC4xMTctNC4wNjgtNi4zODQtMTAuMjktNi4zODQtNi4yMiAwLTkuODQ2IDIuMjY3LTEwLjI4NyA2LjM5N2wtLjE3NiAyLjA2N2gyLjAxNHoiIGZpbGw9IiNGRkYiLz48L2c+PC9zdmc+'), none;
        }

        .logged-in-customer-information .logged-in-customer-information-paragraph {
            display: table-cell;
            width: 100%;
            padding-top: 0.25em;
            vertical-align: middle;
        }

        @media (min-width: 1300px) {
            .hanging-icon {
                position: absolute;
                right: 100%;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-right: 1.5em;
            }
        }

        @media (min-width: 1000px) {
            .wrap {
                padding: 0 5%;
                width: 90%;
                max-width: 78.57143em;
            }

            .order-summary-toggle {
                display: none;
            }

            .flexbox .content .wrap {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .main {
                width: 52%;
                width: 52%;
                padding-right: 6%;
                /* float: left;*/
            }

            .main .main-header {
                padding-bottom: 1em;
            }

            .main .main-header .logo {
                display: block;
            }

            .main .main-header .breadcrumb {
                margin-top: 1em;
            }

            .sidebar {
                width: 38%;
                padding-left: 4%;
                background-position: left top;
                /* float: right; */
            }

            .sidebar:after {
                left: 0;
                background-position: left top;
                box-shadow: 1px 0 0 #e1e1e1 inset;
            }

            .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
                padding-top: 0;
            }
        }

        @media (max-width: 999px) {
            .content {}

            .content.content-second {
                display: block;
            }

            .wrap {
                width: 100%;
                box-sizing: border-box;
                padding: 0 1em;
            }

            .banner {
                display: block;
            }

            .banner.error {
                padding-bottom: 100px;
            }

            #checkout_order_information_changed_error_message {
                position: absolute;
                top: 60px;
                left: 15px;
                width: calc(100% - 30px);
                margin-bottom: 0 !important;
            }

            .main .main-header .breadcrumb {
                display: none;
            }

            .sidebar .sidebar-content .order-summary.order-summary-is-collapsed {
                height: 0;
                overflow: hidden;
            }
        }

        @media (max-width: 999px) and (min-width: 750px) {
            .hanging-icon {
                position: absolute;
                right: 100%;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-right: 1.5em;
            }
        }

        @media (min-width: 750px) {
            h1 {
                font-size: 2em;
            }

            .main {
                padding-top: 1.5em;
            }

            .main .main-content {
                padding-bottom: 4em;
            }

            .step-footer {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                margin-top: 1.5em;
            }

            .step-footer .step-footer-continue-btn {
                -webkit-flex: 0 0 auto;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                float: right;
            }

            .step-footer .step-footer-previous-link {
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin-right: 1em;
                float: left;
                display: block;
            }

            .step-footer .step-footer-info {
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin-right: 1em;
                float: left;
            }

            .section {
                padding-top: 3em;
            }

            .section.thank-you-checkout-info {
                padding-top: 1.5em;
            }

            .section .section-header {
                margin-bottom: 1.5em;
            }

            .field-half {
                width: 50% !important;
            }

            .field-two-thirds {
                width: 66.66667% !important;
            }

            .field-third {
                width: 33.33333% !important;
            }

            .os-header {
                margin: 0 0 -0.5em !important;
            }

            .icon {}

            .icon.icon-closed-box {
                width: 108px;
                height: 85px;
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iODUiIHZpZXdCb3g9IjAgMCAxMDggODUiPjxnIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0xIDE4aDEwNk0xMSA3MC4zaDI2bS0yNi02aDI2bS0yNi02aDE3Ii8+PC9nPjxwYXRoIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xIDE4bDEwLjctMTdoODQuN2wxMC42IDE3djYxLjVjMCAyLjUtMiA0LjUtNC41IDQuNWgtOTdjLTIuNSAwLTQuNS0yLTQuNS00LjV2LTYxLjV6TTU0IDF2MTYuNiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
            }

            .icon.icon-closed-box.has-error {
                width: 108px;
                height: 85px;
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iODUiIHZpZXdCb3g9IjAgMCAxMDggODUiPjxnIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0xIDE4aDEwNk0xMSA3MC4zaDI2bS0yNi02aDI2bS0yNi02aDE3Ii8+PC9nPjxwYXRoIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xIDE4bDEwLjctMTdoODQuN2wxMC42IDE3djYxLjVjMCAyLjUtMiA0LjUtNC41IDQuNWgtOTdjLTIuNSAwLTQuNS0yLTQuNS00LjV2LTYxLjV6TTU0IDF2MTYuNiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
            }
        }

        @media (min-width: 1000px) {

            .main,
            .sidebar {
                padding-top: 4em;
            }
        }

        .text-center {
            text-align: center;
        }

        @media (max-width: 749px) {
            .modal-container {
                display: block;
            }

            .tool-tip__info,
            .tool-tip {
                display: none !important;
            }

            .main {
                padding-top: 1.5em;
            }

            .main .main-content {
                padding-bottom: 1.5em;
            }

            .section-header {
                margin-bottom: 1em;
            }

            .text-center {
                text-align: left;
            }

            .btn {
                width: 100%;
                padding-top: 1.75em;
                padding-bottom: 1.75em;
            }

            .step-footer {}

            .step-footer .step-footer-previous-link {
                padding-top: 1.5em;
                text-align: center;
            }

            .step-footer .step-footer-info {
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-top: 1.5em;
                text-align: center;
            }
        }

        .thank-you-additional-content {
            margin-top: 15px;
            line-height: 1.25em;
        }

        .blank-slate {
            white-space: pre-line;
            padding: 1.5em;
            text-align: center;
        }

        .paylater {
            padding: .8em;
            white-space: normal;
        }

        .paylater--ul {
            list-style-type: disc;
            padding: 0 2em;
            padding-right: 1em;
            word-break: break-word;
        }

        .paylater--ul li {
            margin: 5px;
            text-align: justify;
        }

        .blank-slate .blank-slate-icon {
            margin-bottom: 1em;
        }

        .dp-none {
            display: none;
        }

        .dp-inline-block {
            display: inline-block;
        }

        .visually-hidden {
            border: 0;
            clip: rect(0, 0, 0, 0);
            clip: rect(0 0 0 0);
            width: 2px;
            height: 2px;
            margin: -2px;
            overflow: hidden;
            padding: 0;
            position: absolute;
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        .group:after {
            content: "";
            display: table;
            clear: both;
        }

        .pt0 {
            padding-top: 0px !important;
        }

        .mt0 {
            margin-top: 0px !important;
        }

        .mb5 {
            margin-bottom: 5px;
        }

        .hidden {
            display: none !important;
        }

        form#form_update_shipping_method {
            position: relative;
        }

        .footer-powered-by {
            text-align: center;
            color: #4B5563;
            font-size: 0.9em;
        }

        .order-checkout__loading {
            position: static;
        }

        .order-checkout__loading--box {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .checkout-payment__loading--box {
            position: relative;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0;
        }

        .checkout-payment__loading--box p {
            margin-top: 1em;
        }

        .checkout-payment__loading--box.show {
            z-index: 2;
            visibility: visible;
            opacity: 1;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .order-checkout__loading--box.show {
            z-index: 2;
            visibility: visible;
            opacity: 1;
        }

        .order-checkout__loading--circle {
            border: 2px solid #f3f3f3;
            border-top: 2px solid #5cabe0;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            margin: 0;
            -webkit-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -moz-animation: spin 700ms infinite linear;
            -ms-animation: spin 1.5s infinite linear;
            -webkit-animation: spin 700ms infinite linear;
            -o-animation: spin 700ms infinite linear;
            animation: spin 700ms infinite linear;
            z-index: 1;
        }

        .order-checkout__loading--box.show:after {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 3;
        }


        .step-sections {
            position: relative;
            z-index: 3;
        }

        @media (max-width: 767px) {
            .order-checkout__loading--box {
                position: fixed;
            }

            .order-checkout__loading--box.show:after {
                display: none;
            }
        }


        .order-checkout__loading--show .order-checkout__loading--box {
            display: block;
        }


        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .redeem-login {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .redeem-login-title {
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .redeem-login-title h2 {
            color: #333;
            margin-right: 5px;
        }


        .redeem-login-btn a {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 13px 10px;
            background: #338dbc;
            color: #fff;
            width: 82px;
            text-align: center;
        }

        .redeem-login-btn a:hover,
        .redeem-login-btn a:focus {
            filter: brightness(1.2);
        }

        .redeem-form-used {
            padding-top: 10px;
        }

        .btn-redeem-loading .btn-redeem-spinner {
            -webkit-animation: rotate 0.5s linear infinite;
            animation: rotate 0.5s linear infinite;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
            filter: alpha(opacity=100);
        }

        .icon-redeem-button-spinner {
            position: absolute;
            top: 0;
            opacity: 0;
            right: -25px;
            width: 12px;
            height: 12px;
            border: 2px solid #999999;
            border-bottom-color: transparent;
            border-radius: 100%;
        }

        .total-line-table-footer {
            white-space: nowrap;
        }

        .row-align-top {
            vertical-align: top;
        }

        .section .section-content #form_update_shipping_method.default .content-box .content-box-row.content-box-row-secondary {
            padding: 0;
            background: transparent;
            border: none !important;
            margin: 0;
            width: 100%;
            display: block;
            box-shadow: unset !important;
        }

        form#form_update_shipping_method.default {
            padding: 0;
        }

        #form_update_shipping_method.default .content-box {
            box-shadow: unset;
        }




        .hrv-discount-choose-coupons {
            cursor: pointer;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            color: #338dbc;
        }

        .hrv-discount-choose-coupons #list_short_coupon {
            display: -webkit-flex;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            width: 100%;
        }

        .hrv-discount-choose-coupons>div:first-child {
            flex: 0 0 100%;
            margin-bottom: 10px;
        }

        .hrv-discount-choose-coupons #list_short_coupon>span:not(:last-child) {
            margin-right: 5px;
        }

        .hrv-discount-choose-coupons #list_short_coupon>span {
            overflow: hidden;
            padding: 6px 0;
            position: relative;
            margin-bottom: 5px;
        }

        .hrv-discount-choose-coupons #list_short_coupon>span span {
            border: 1px solid #338dbc;
            padding: 5px 10px;
            border-radius: 3px;
            background: #fff;
            font-weight: 700;
            color: #338dbc
        }

        .hrv-discount-choose-coupons #list_short_coupon>span:before {
            content: "";
            display: block;
            width: 10px;
            height: 10px;
            border: 1px solid #338dbc;
            background: #fff;
            z-index: 1;
            left: -7px;
            top: 50%;
            position: absolute;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .hrv-discount-choose-coupons #list_short_coupon>span:after {
            content: "";
            display: block;
            width: 10px;
            height: 10px;
            border: 1px solid #338dbc;
            background: #fff;
            z-index: 1;
            right: -7px;
            top: 50%;
            position: absolute;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .hrv-coupons-popup {
            width: 375px;
            transition: opacity 0.5s ease-out;
            padding: 0;
            opacity: 1;
            position: fixed;
            background: #FFFFFF;
            box-shadow: 0px 0px 20px rgb(33 33 33 / 20%);
            border-radius: 8px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-height: 70vh;
            min-height: 500px;
            z-index: 1234;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-out;
            display: -webkit-flex;
            display: flex;
            flex-direction: column;
        }

        .hrv-title-coupons-popup {
            display: flex;
            padding: 19px 16px;
            width: calc(100% - 32px);
            position: relative;
            box-shadow: inset 0px -1px 0px #eeeeee;
        }

        .hrv-title-coupons-popup p {
            width: 100%;
            font-weight: 500;
            font-size: 20px;
            line-height: 22px;
            padding-right: 60px;
            color: #424242;
        }

        .hrv-title-coupons-popup div {
            width: 60px;
            height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 5;
        }

        .hrv-title-coupons-popup div svg {
            float: right;
            cursor: pointer;
        }

        .hrv-coupons-popup-site-overlay {
            background: #CFCFCF;
            position: fixed;
            opacity: 0.6 !important;
            top: 0px;
            right: 0px;
            left: 0px;
            bottom: 0px;
            z-index: 123;
            visibility: hidden;
        }

        .hrv-content-coupons-code {
            overflow-x: hidden !important;
            overflow-y: auto;
            max-height: calc(100% - 82px);
            padding: 11px 12.5px;
        }

        div[class*="hrv-discount-code-"].open-more .text-center span:last-child {
            transform: rotate(180deg);
            display: inline-block;
        }

        h3.coupon_heading {
            font-size: 16px;
            line-height: 22px;
            font-weight: 500;
            padding: 0 3.5px;
            width: 100%;
            color: #424242;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }

            50% {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px);
            }

            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }

            50% {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px);
            }

            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

        #show_all_coupon {
            /*-webkit-animation: pulse 1s infinite;
	animation: pulse 2s infinite;*/
            height: 40px;
            width: 100%;
            color: #338dbc;
        }

        #show_all_coupon svg {
            fill: #338dbc;
            width: 15px;
            position: relative;
        }

        .active-popup {
            opacity: 1;
            visibility: visible;
        }

        .hrv-content-coupons-code .coupon_icon {
            display: flex;
            width: 100%;
            align-items: center;
        }

        .hrv-content-coupons-code .coupon_item {
            position: relative;
            background: #fff;
            filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, .15));
            padding: 10px 16px;
            display: flex;
            min-height: 80px;
            border-radius: 5px;
            margin: 5px 0px 15px 2px;
        }

        .hrv-content-coupons-code::-webkit-scrollbar {
            width: 8px;
            background-color: transparent;
        }

        .hrv-content-coupons-code::-webkit-scrollbar-thumb {
            background-color: #e0e0e0;
            border-radius: 4px;
        }

        .hrv-content-coupons-code .coupon_item:before {
            content: "";
            display: none;
            position: absolute;
            top: 0;
            left: -3px;
            height: 100%;
            width: 10px;
            color: #fff;
            background-clip: padding-box;
            background: repeating-linear-gradient(#e5e5e5, #e5e5e5 5px, transparent 0, transparent 9px, #e5e5e5 0, #e5e5e5 10px) 0/1px 100% no-repeat, radial-gradient(circle at 0 7px, transparent, transparent 2px, #e5e5e5ee 0, #e5e5e5 3px, currentColor 0) 1px 0/100% 10px repeat-y;
        }

        .hrv-content-coupons-code .coupon_icon>div {
            flex: 0 0 auto;
        }

        .hrv-content-coupons-code .coupon_icon .icon-svg {
            width: 37px;
            flex: 0 0 auto;
            margin-right: 10px;
            text-align: center;
        }

        .hrv-content-coupons-code .coupon_icon .icon-svg svg {
            width: 100%;
        }

        .hrv-content-coupons-code .coupon_body {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
            position: relative;
        }

        .hrv-content-coupons-code .coupon_body .coupon_head {
            width: 100%;
            display: -webkit-flex;
            display: flex;
            align-items: center;
            /* margin-bottom: 10px;
	position: relative;*/
        }

        .coupon_layer {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: transparent;
        }

        .hrv-content-coupons-code .coupon_item h3.coupon_title {
            font-size: 16px;
            width: calc(100% - 47px);
            margin: 0.25em 0 5px;
        }

        .hrv-content-coupons-code .coupon_item h3.coupon_title span {
            font-weight: bold;
            font-size: 16px;
            line-height: 20px;
            color: #212121;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc {
            display: none;
            position: relative;
            z-index: 2;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc ul,
        .hrv-content-coupons-code .coupon_item .coupon_desc_short ul {
            list-style: initial;
            list-style-position: outside;
            padding-left: 18px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc_short.close {
            display: none;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc_short.close+.coupon_desc {
            display: block;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] {
            width: 100%;
            font-size: 14px;
            color: #212121;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li a {
            display: block;
            margin-bottom: 5px;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li a:before {
            content: "-";
            margin-right: 5px
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li br {
            display: none;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li a:first-child {
            margin-top: 5px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_actions {
            display: -webkit-flex;
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            margin-top: 8px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more {
            cursor: pointer;
            color: #338dbc;
            margin-top: 0px;
            position: relative;
            z-index: 2;
            font-size: 14px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open {
            font-size: 0px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open:before {
            content: "Thu gọn";
            font-size: 14px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_exp {
            max-width: calc(100% - 75px);
            line-height: 20px;
            margin-top: 0px;
            font-size: 14px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more svg {
            fill: #338bdc;
            width: 10px;
            margin-left: 8px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open svg {
            transform: rotate(180deg);
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open #show_all_icon {
            transform: rotate(180deg);
        }

        .btn_apply_line_coupon {
            height: 32px;
            padding: 5px 10px !important;
            width: auto !important;
            background: #338dbc;
        }



        @media screen and (max-width: 767px) {
            .hrv-content-coupons-code .coupon_item {
                padding: 5px 12.5px;
                width: calc(100% - 25px);
                margin: 5px 0 15px;
            }

            .hrv-coupons-popup {
                width: 100%;
                top: unset;
                bottom: 0;
                left: 0;
                height: 80vh;
                min-height: unset;
                max-height: unset;
                border-radius: 8px 8px 0 0;
                transform: translate(0, 0);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
                -webkit-transition: transform 0.35s ease, bottom 0.25s ease, visibility 0s;
                transition: transform 0.3;
            }

            .hrv-coupons-popup.active-popup {
                max-height: calc(100% - 60px);
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-transition-delay: 0.1s;
                transition-delay: 0.1s;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
            }

            .hrv-content-coupons-code .coupon_icon {
                padding: 10px 0;
            }
        }

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section[data-order-summary-section="discount-display"] {
            padding: 0px;
            border-top: 0px;
            padding-bottom: 1.5em;
        }

        .order-summary-section.order-summary-section-total-lines.payment-lines[data-order-summary-section="payment-lines"] {
            padding-top: 1em !important;
        }
    </style>



    <link href="//theme.hstatic.net/200000680123/1001107404/14/check_out.css?v=47" rel="stylesheet" type="text/css" media="all">
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

            if (formId == 'form_update_location_customer_shipping' || formId == 'form_update_shipping_method' || formId == 'section-shipping-rate' || formId == 'section-payment-method') {
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

                if ($('body').find('#customer_pick_at_location_true').length != 0 && $('body').find('#customer_pick_at_location_true').is(':checked')) {
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
                if (address1tmp != '' && address1tmp != undefined) listparameters.set('billing_address[address1]', address1tmp);

                var phonetmp = $('body').find('input[name$="billing_address[phone]"]').val();
                if (phonetmp != '' && phonetmp != undefined) listparameters.set('billing_address[phone]', phonetmp);

                var emailtmp = $('body').find('input[name$="checkout_user[email]"]').val();
                if (emailtmp != '' && emailtmp != undefined) listparameters.set('checkout_user[email]', emailtmp);

                var fullnametmp = $('body').find('input[name$="billing_address[full_name]"]').val();
                if (fullnametmp != '' && fullnametmp != undefined) listparameters.set('billing_address[full_name]', fullnametmp);


                listparameters.delete('selected_customer_shipping_country');
                listparameters.delete('selected_customer_shipping_province');
                listparameters.delete('selected_customer_shipping_district');
                listparameters.delete('selected_customer_shipping_ward');

                if ($('body').find('input[name$="customer_pick_at_location"]')) {
                    var optionShippingtmp = $('body').find('input[name$="customer_pick_at_location"]:checked').val();
                    if (optionShippingtmp != '' && optionShippingtmp != undefined) listparameters.set('customer_pick_at_location', optionShippingtmp);

                } else {
                    listparameters.append("customer_pick_at_location", false);
                }


                if (formId == 'form_next_step' || formId == 'form_update_shipping_method' || formId == 'section-payment-method' || formId == 'section-shipping-rate') {
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
                if (provincetmp != '' && listparameters.customer_shipping_province) listparameters.customer_shipping_province = provincetmp;

                var districttmp = $('body').find('input[name$="selected_customer_shipping_district"]').val();
                if (districttmp != '' && listparameters.customer_shipping_district) listparameters.customer_shipping_district = districttmp;

                var wardtmp = $('body').find('input[name$="selected_customer_shipping_ward"]').val();
                if (wardtmp != '' && listparameters.customer_shipping_ward) listparameters.customer_shipping_ward = wardtmp;


                var address1tmp = $('body').find('input[name$="billing_address[address1]"]').val();
                if (address1tmp != '' && listparameters.billing_address[address1] && address1tmp != undefined) listparameters.set('billing_address[address1]', address1tmp);

                var phonetmp = $('body').find('input[name$="billing_address[phone]"]').val();
                if (phonetmp != '' && listparameters.billing_address[phone] && phonetmp != undefined) listparameters.set('billing_address[phone]', phonetmp);

                var emailtmp = $('body').find('input[name$="checkout_user[email]"]').val();
                if (emailtmp != '' && listparameters.checkout_user[email] && emailtmp != undefined) listparameters.set('checkout_user[email]', emailtmp);


                var fullnametmp = $('body').find('input[name$="billing_address[full_name]"]').val();
                if (fullnametmp != '' && listparameters.billing_address[full_name] && fullnametmp != undefined) listparameters.set('billing_address[full_name]', fullnametmp);


                delete listparameters.selected_customer_shipping_country;
                delete listparameters.selected_customer_shipping_province;
                delete listparameters.selected_customer_shipping_district;
                delete listparameters.selected_customer_shipping_ward;

                if ($('body').find('input[name$="customer_pick_at_location"]')) {
                    var optionShippingtmp = $('body').find('input[name$="customer_pick_at_location"]:checked').val();
                    if (optionShippingtmp != '' && optionShippingtmp != undefined) listparameters.set('customer_pick_at_location', optionShippingtmp);
                } else {
                    listparameters.append("customer_pick_at_location", false);
                }

                if (formId == 'form_next_step' || formId == 'form_update_shipping_method' || formId == 'section-payment-method' || formId == 'section-shipping-rate') {
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

                                            if ($(newElement[j]).attr('id') == 'checkout_order_information_changed_error_message') {
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
                                            if ($(newElement[j]).attr('class') == 'order-summary-sections' && formId == 'section-payment-method') {
                                                const oldVersion = $('.checkout_version')
                                                const newVersion = $(html).find('.checkout_version').attr('data_checkout_version')
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
                        if (['section-payment-method', 'form_discount_add', 'section-shipping-rate', 'form_discount_remove'].includes(formId) && isReePay) {
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

                        if (formId == 'form_update_location_customer_shipping' || formId == 'form_update_shipping_method' || formId == 'section-shipping-rate' || formId == 'section-payment-method') {
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
                if (formId == 'form_update_location_customer_shipping' || formId == 'form_update_shipping_method' || formId == 'section-shipping-rate' || formId == 'section-payment-method') {
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
                    url: window.location.origin + window.location.pathname + '?' + 'payment_method_id=' + paymentMethodId + '&preview=true',
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

                        var province_selected = $('body').find('#form_update_location_customer_shipping select[name=customer_shipping_province]');
                        if (province_selected && province_selected.length > 0) {
                            province_selected.val("null");
                        }
                        var district_selected = $('body').find('#form_update_location_customer_shipping select[name=customer_shipping_district]');
                        if (district_selected && district_selected.length > 0) {
                            district_selected.val("null");
                        }

                        var ward_selected = $('body').find('#form_update_location_customer_shipping select[name=customer_shipping_ward]');
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
                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_province]', function() {

                    var province_selected = $('body').find('input[name=selected_customer_shipping_province]');
                    if (province_selected && province_selected.length > 0) {
                        $(province_selected).val($(this).val());
                        var district_selected = $('body').find('#form_update_location_customer_shipping select[name=customer_shipping_district]');
                        if (district_selected && district_selected.length > 0) {
                            district_selected.val("null");
                        }

                        var ward_selected = $('body').find('#form_update_location_customer_shipping select[name=customer_shipping_ward]');
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
                .on('change', '#form_update_location_customer_shipping select[name=customer_shipping_district]', function() {

                    var district_selected = $('body').find('input[name=selected_customer_shipping_district]');
                    if (district_selected && district_selected.length > 0) {
                        $(district_selected).val($(this).val());

                        var ward_selected = $('body').find('#form_update_location_customer_shipping select[name=customer_shipping_ward]');
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
            const findPaymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').attr('type-id');
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
    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
    <script type="text/javascript">
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
    </script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-24C1XZ9BDQ"></script>
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


                <h1 class="logo-text">TITEK</h1>

            </a>
        </div>
    </div>

    <button class="order-summary-toggle order-summary-toggle-hide">
        <div class="wrap">
            <div class="order-summary-toggle-inner">
                <div class="order-summary-toggle-icon-wrapper">
                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon">
                        <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path>
                    </svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-show">
                    <span>Hiển thị thông tin đơn hàng</span>
                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000">
                        <path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path>
                    </svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                    <span>Ẩn thông tin đơn hàng</span>
                    <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000">
                        <path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path>
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


                            <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">

                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                    <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="false" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="">
                                                </div>
                                                <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
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
                            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
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

                                        <tr class="product" data-product-id="1048411865" data-variant-id="1109500956">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image" alt="TTK FIRE - 3050" src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_small.png">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">1</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">TTK FIRE - 3050</span>

                                                <span class="product-description-variant order-summary-small-text">
                                                    TTK FIRE - 3050
                                                </span>

                                            </td>
                                            <td class="product-quantity visually-hidden">1</td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis">15,000,000₫</span>
                                            </td>
                                        </tr>

                                        <tr class="product" data-product-id="1046864694" data-variant-id="1105772694">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image" alt="TTK FIRE - 3060" src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_small.png">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">1</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">TTK FIRE - 3060</span>

                                                <span class="product-description-variant order-summary-small-text">
                                                    TTK FIRE - 3060
                                                </span>

                                            </td>
                                            <td class="product-quantity visually-hidden">1</td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis">17,000,000₫</span>
                                            </td>
                                        </tr>

                                        <tr class="product" data-product-id="1047732620" data-variant-id="1107597774">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image" alt="TTK FIRE - 1650" src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_small.jpg">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">1</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">TTK FIRE - 1650</span>

                                                <span class="product-description-variant order-summary-small-text">
                                                    TTK Fire - 1650
                                                </span>

                                            </td>
                                            <td class="product-quantity visually-hidden">1</td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis">11,000,000₫</span>
                                            </td>
                                        </tr>

                                        <tr class="product" data-product-id="1048411919" data-variant-id="1109501086">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image" alt="TTK FIRE - 1650 v2" src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_small.png">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">1</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">TTK FIRE - 1650 v2</span>

                                                <span class="product-description-variant order-summary-small-text">
                                                    TTK FIRE - 1650 v2
                                                </span>

                                            </td>
                                            <td class="product-quantity visually-hidden">1</td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis">12,500,000₫</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                    <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="false" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="">
                                                </div>
                                                <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                <table class="total-line-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">Tạm tính</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="5550000000">
                                                    55,500,000₫
                                                </span>
                                            </td>
                                        </tr>


                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">Phí vận chuyển</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">

                                                    —

                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                        <tr class="total-line">
                                            <td class="total-line-name payment-due-label">
                                                <span class="payment-due-label-total">Tổng cộng</span>
                                            </td>
                                            <td class="total-line-name payment-due">
                                                <span class="payment-due-currency">VND</span>
                                                <span class="payment-due-price" data-checkout-payment-due-target="5550000000">
                                                    55,500,000₫
                                                </span>
                                                <span class="checkout_version" display:none="" data_checkout_version="0">
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

                    <a href="/" class="logo">

                        <h1 class="logo-text">TITEK</h1>

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

                        @media (max-width: 767px) {
                            .banner a {
                                display: block;
                            }
                        }
                    </style>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/cart">Giỏ hàng</a>
                        </li>

                        <li class="breadcrumb-item breadcrumb-item-current">

                            Thông tin giao hàng

                        </li>
                        <li class="breadcrumb-item ">

                            Phương thức thanh toán

                        </li>

                    </ul>

                </div>
                <div class="main-content">


                    <div id="checkout_order_information_changed_error_message" class="hidden" style="margin-bottom:15px">



                        <p class="field-message field-message-error alert alert-danger"><svg x="0px" y="0px" viewBox="0 0 286.054 286.054" style="enable-background:new 0 0 286.054 286.054;" xml:space="preserve">
                                <g>
                                    <path style="fill:#E2574C;" d="M143.027,0C64.04,0,0,64.04,0,143.027c0,78.996,64.04,143.027,143.027,143.027 c78.996,0,143.027-64.022,143.027-143.027C286.054,64.04,222.022,0,143.027,0z M143.027,259.236 c-64.183,0-116.209-52.026-116.209-116.209S78.844,26.818,143.027,26.818s116.209,52.026,116.209,116.209 S207.21,259.236,143.027,259.236z M143.036,62.726c-10.244,0-17.995,5.346-17.995,13.981v79.201c0,8.644,7.75,13.972,17.995,13.972 c9.994,0,17.995-5.551,17.995-13.972V76.707C161.03,68.277,153.03,62.726,143.036,62.726z M143.036,187.723 c-9.842,0-17.852,8.01-17.852,17.86c0,9.833,8.01,17.843,17.852,17.843s17.843-8.01,17.843-17.843 C160.878,195.732,152.878,187.723,143.036,187.723z"></path>
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


                    <div class="step">

                        <div class="step-sections " step="1">



                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
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
                                                <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                                <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="billing_address[full_name]" value="" autocomplete="false">
                                            </div>

                                        </div>



                                        <div class="field  field-two-thirds  ">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="checkout_user_email">Email</label>
                                                <input autocomplete="false" placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="checkout_user[email]" value="">
                                            </div>

                                        </div>



                                        <div class="field field-required field-third  ">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                                <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="billing_address[phone]" value="">
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="section-content">
                                    <div class="fieldset">

                                        <form autocomplete="off" id="form_update_shipping_method" class="field default" accept-charset="UTF-8" method="post">
                                            <input name="utf8" type="hidden" value="✓">
                                            <div class="content-box mt0">

                                                <div id="form_update_location_customer_shipping" class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary " for="customer_pick_at_location_false">
                                                    <input name="utf8" type="hidden" value="✓">
                                                    <div class="order-checkout__loading--box">
                                                        <div class="order-checkout__loading--circle"></div>
                                                    </div>

                                                    <div class="field field-required  ">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                                            <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="billing_address[address1]" value="">
                                                        </div>

                                                    </div>



                                                    <input name="selected_customer_shipping_country" type="hidden" value="">
                                                    <input name="selected_customer_shipping_province" type="hidden" value="">
                                                    <input name="selected_customer_shipping_district" type="hidden" value="">
                                                    <input name="selected_customer_shipping_ward" type="hidden" value="">

                                                    <div class="field field-show-floating-label field-required field-third ">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="customer_shipping_province"> Tỉnh / thành </label>
                                                            <select class="field-input" id="customer_shipping_province" name="customer_shipping_province">
                                                                <option data-code="null" value="null" selected="">

                                                                    Chọn tỉnh / thành </option>



                                                                <option data-code="HC" value="50">Hồ Chí Minh</option>



                                                                <option data-code="HI" value="1">Hà Nội</option>



                                                                <option data-code="DA" value="32">Đà Nẵng</option>



                                                                <option data-code="AG" value="57">An Giang</option>



                                                                <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>



                                                                <option data-code="BI" value="47">Bình Dương</option>



                                                                <option data-code="BP" value="45">Bình Phước</option>



                                                                <option data-code="BU" value="39">Bình Thuận</option>



                                                                <option data-code="BD" value="35">Bình Định</option>



                                                                <option data-code="BL" value="62">Bạc Liêu</option>



                                                                <option data-code="BG" value="15">Bắc Giang</option>



                                                                <option data-code="BK" value="4">Bắc Kạn</option>



                                                                <option data-code="BN" value="18">Bắc Ninh</option>



                                                                <option data-code="BT" value="53">Bến Tre</option>



                                                                <option data-code="CB" value="3">Cao Bằng</option>



                                                                <option data-code="CM" value="63">Cà Mau</option>



                                                                <option data-code="CN" value="59">Cần Thơ</option>



                                                                <option data-code="GL" value="41">Gia Lai</option>



                                                                <option data-code="HG" value="2">Hà Giang</option>



                                                                <option data-code="HM" value="23">Hà Nam</option>



                                                                <option data-code="HT" value="28">Hà Tĩnh</option>



                                                                <option data-code="HO" value="11">Hòa Bình</option>



                                                                <option data-code="HY" value="21">Hưng Yên</option>



                                                                <option data-code="HD" value="19">Hải Dương</option>



                                                                <option data-code="HP" value="20">Hải Phòng</option>



                                                                <option data-code="HU" value="60">Hậu Giang</option>



                                                                <option data-code="KH" value="37">Khánh Hòa</option>



                                                                <option data-code="KG" value="58">Kiên Giang</option>



                                                                <option data-code="KT" value="40">Kon Tum</option>



                                                                <option data-code="LI" value="8">Lai Châu</option>



                                                                <option data-code="LA" value="51">Long An</option>



                                                                <option data-code="LO" value="6">Lào Cai</option>



                                                                <option data-code="LD" value="44">Lâm Đồng</option>



                                                                <option data-code="LS" value="13">Lạng Sơn</option>



                                                                <option data-code="ND" value="24">Nam Định</option>



                                                                <option data-code="NA" value="27">Nghệ An</option>



                                                                <option data-code="NB" value="25">Ninh Bình</option>



                                                                <option data-code="NT" value="38">Ninh Thuận</option>



                                                                <option data-code="PT" value="16">Phú Thọ</option>



                                                                <option data-code="PY" value="36">Phú Yên</option>



                                                                <option data-code="QB" value="29">Quảng Bình</option>



                                                                <option data-code="QM" value="33">Quảng Nam</option>



                                                                <option data-code="QG" value="34">Quảng Ngãi</option>



                                                                <option data-code="QN" value="14">Quảng Ninh</option>



                                                                <option data-code="QT" value="30">Quảng Trị</option>



                                                                <option data-code="ST" value="61">Sóc Trăng</option>



                                                                <option data-code="SL" value="9">Sơn La</option>



                                                                <option data-code="TH" value="26">Thanh Hóa</option>



                                                                <option data-code="TB" value="22">Thái Bình</option>



                                                                <option data-code="TY" value="12">Thái Nguyên</option>



                                                                <option data-code="TT" value="31">Thừa Thiên Huế</option>



                                                                <option data-code="TG" value="52">Tiền Giang</option>



                                                                <option data-code="TV" value="54">Trà Vinh</option>



                                                                <option data-code="TQ" value="5">Tuyên Quang</option>



                                                                <option data-code="TN" value="46">Tây Ninh</option>



                                                                <option data-code="VL" value="55">Vĩnh Long</option>



                                                                <option data-code="VT" value="17">Vĩnh Phúc</option>



                                                                <option data-code="YB" value="10">Yên Bái</option>



                                                                <option data-code="DB" value="7">Điện Biên</option>



                                                                <option data-code="DC" value="42">Đắk Lắk</option>



                                                                <option data-code="DO" value="43">Đắk Nông</option>



                                                                <option data-code="DN" value="48">Đồng Nai</option>



                                                                <option data-code="DT" value="56">Đồng Tháp</option>



                                                            </select>
                                                        </div>


                                                    </div>


                                                    <div class="field field-show-floating-label field-required field-third ">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                                                            <select class="field-input" id="customer_shipping_district" name="customer_shipping_district">
                                                                <option data-code="null" value="null" selected="">Chọn quận / huyện</option>

                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="field field-show-floating-label field-required  field-third  ">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="customer_shipping_ward">Phường / xã</label>
                                                            <select class="field-input" id="customer_shipping_ward" name="customer_shipping_ward">
                                                                <option data-code="null" value="null" selected="">Chọn phường / xã</option>

                                                            </select>
                                                        </div>

                                                    </div>



                                                    <div id="div_location_country_not_vietnam" class="section-customer-information " style="display: none;">
                                                        <div class="field field-two-thirds">
                                                            <div class="field-input-wrapper">
                                                                <label class="field-label" for="billing_address_city">Thành phố</label>
                                                                <input placeholder="Thành phố" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_city" name="billing_address[city]" value="">
                                                            </div>
                                                        </div>
                                                        <div class="field field-third">
                                                            <div class="field-input-wrapper">
                                                                <label class="field-label" for="billing_address_zip">Mã bưu chính</label>
                                                                <input placeholder="Mã bưu chính" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_zip" name="billing_address[zip]" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                    </div>

                                </div>
                                <div id="change_pick_location_or_shipping">




                                </div>
                            </div>



                        </div>
                        <div class="step-footer" id="step-footer-checkout">


                            <form id="form_next_step" accept-charset="UTF-8" method="post">
                                <input name="utf8" type="hidden" value="✓">
                                <button type="submit" class="step-footer-continue-btn btn">
                                    <span class="btn-content">Tiếp tục đến phương thức thanh toán</span>
                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                </button>
                            </form>
                            <a class="step-footer-previous-link" href="/cart">
                                Giỏ hàng
                            </a>


                        </div>
                    </div>

                </div>
                <div class="hrv-coupons-popup">
                    <div class="hrv-title-coupons-popup">
                        <p>Chọn giảm giá <span class="count-coupons"></span></p>
                        <div class="hrv-coupons-close-popup">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.1663 2.4785L15.5213 0.833496L8.99968 7.35516L2.47801 0.833496L0.833008 2.4785L7.35468 9.00016L0.833008 15.5218L2.47801 17.1668L8.99968 10.6452L15.5213 17.1668L17.1663 15.5218L10.6447 9.00016L17.1663 2.4785Z" fill="#424242"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="hrv-content-coupons-code">
                        <h3 class="coupon_heading">Mã giảm giá của shop</h3>
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
                    str_LimitUsedCustomer = "<li>Mỗi khách hàng chỉ được áp dụng " + item.customer_limit_used + " lần</li>";

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
                        var str = "<a target='blank' href='" + obj.product_url + "'>" + obj.product_title + "</a> <br/>";
                        lstProducts += str;
                    })

                    applyForProducts += lstProducts + " </li>";
                } else if (item.product_apply_type == 3) {
                    //collection_prerequisite
                    applyForProducts += "<li>Nhóm sản phẩm ";

                    var lstCollections = "";
                    item.entitled_collections.data.forEach(function(objData) {
                        var obj = objData.collection;
                        var str = "<a target='blank' href='" + obj.collection_url + "'>" + obj.collection_title + "</a> <br/>";
                        lstCollections += str;
                    })

                    applyForProducts += lstCollections + " </li>";
                } else if (item.product_apply_type == 4) {
                    //variant_prerequisite
                    applyForProducts += "<li>Biến thể của sản phẩm";

                    var lstVariants = "";
                    item.entitled_variants.data.forEach(function(objData) {

                        var obj = objData.variant;
                        var str = "<a target='blank' href='" + obj.product_url + "'>" + obj.product_title + " (" + obj.variant_title + ")" + "</a> <br/>";
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
                            var subItem = "<li>Không áp dụng nếu phí vận chuyển vượt quá " + max_shipping_fee_apply + "</li>";
                            resultDiscount = resultDiscount + subItem;
                        }
                    } else {
                        //percentage
                        var amount = item.savings / 100;
                        resultDiscount = "<li>Giảm " + amount + "% phí vận chuyển" + "</li>";
                        if (item.max_shipping_fee_apply > 0) {
                            var max_shipping_fee_apply = Haravan.formatMoney(item.max_shipping_fee_apply, "₫");
                            var subItem = "<li>Không áp dụng nếu phí vận chuyển vượt quá " + max_shipping_fee_apply + "</li>";
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
                if ($('.hrv-coupons-popup').hasClass('active-popup') && $('.hrv-coupons-popup-site-overlay').hasClass('active-popup')) {
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
                    if (couponItem.highlight_note != '') htmlItemCoupon += `<div class="coupon_desc_short">${couponItem.highlight_note}</div>`;
                    if (couponItem.description != '') htmlItemCoupon += `<div class="coupon_desc">${couponItem.description}</div>`;
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
                    parentDOM.find('.coupon_item:nth-child(n+3):nth-child(-n+' + coupons + ')').addClass('hidden');
                    parentDOM.removeClass('open-more');
                    $(this).find('span:first-child').html('Xem thêm');
                }
            });

            $('body').on('click', '.order-summary-section-display-discount .hrv-discount-choose-coupons', function() {
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
                $('form#form_discount_add button.field-input-btn.btn.btn-default').removeClass('btn-disabled');
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