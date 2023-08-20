<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        QLAH- Lịch sử đơn hàng
    </title>
    <link rel="stylesheet" href="../../user/history.css" type="text/css">
    <meta name="description" content="QLAH- Lịch sử đơn hàng">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
</head>

<body style="">
    <input id="reloadValue" type="hidden" name="reloadValue" value="">
    <input id="is_vietnam" type="hidden" value="true">
    <input id="is_vietnam_location" type="hidden" value="true">

    <div class="content">

        <div class="wrap">

            <div class="main">
                <div class="main-header">
                    <a href="{{ route('dashboad') }}" class="logo">
                        <h1 class="logo-text">QLAH</h1>
                    </a>
                </div>
                <div class="main-content">
                    <div id="checkout_order_information_changed_error_message" class="hidden"
                        style="margin-bottom:15px">
                    </div>
                    <form action="{{ route('shop-check-out') }}" id="shop-check-out" method="post">
                        @csrf
                        <div class="step">
                            <div class="step-sections " step="1">
                                <div class="section">
                                    <div class="section-header">
                                        <h2 class="section-title">Order History</h2>
                                    </div>
                                    <div class="section-content section-customer-information no-mb">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col" style="width: 400px;">Name</th>
                                                    <th scope="col" style="width: 120px;">Price</th>
                                                    <th scope="col" style="width: 150px;">Image</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col" style="width: 150px;">Total</th>
                                                    <th scope="col" style="width: 150px;">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $format = new NumberFormatter('vi-VN', NumberFormatter::CURRENCY);
                                                @endphp
                                                @foreach ($data as $key => $product)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $product->productName }}</td>
                                                        <td>{{ $format->formatCurrency($product->productPrice, 'VND') }}
                                                        </td>
                                                        <td><img src="{{ asset('storage/products/' . $product->productImage) }}"
                                                                style="height: 100px; width: 100px;"></td>
                                                        <td>{{ $product->quantity }}</td>
                                                        <td>{{ $format->formatCurrency($product->total, 'VND') }}</td>
                                                        <td>{{ $product->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="http://127.0.0.1:8000/shop/" class="btn btn-primary">Back</a>
                </div>
                <div class="main-footer footer-powered-by">Powered by QLAH Team</div>
            </div>
        </div>
    </div>
</body>

</html>
