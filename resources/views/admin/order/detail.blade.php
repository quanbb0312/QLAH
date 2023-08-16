@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderDetail as $order)
                                <tr>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->product->productName }}</td>
                                    <td>{{ number_format($order->product->productPrice) }} VND</td>
                                    <td><img src="{{ asset('storage/products/' . $order->product->productImage) }}"
                                                style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ number_format($order->total) }} VND</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
