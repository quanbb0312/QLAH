@extends('shop.master')
@section('content')
    <main>
        <div id="collection">
            <div class="breadcrumb-shop">
                <div class="breadcrumb-wrap container container-xl">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/shop">Trang chủ</a></li>
                        <li class="breadcrumb-item active">
                            @if (count($listProduct) > 0)
                                <p>{{ $listProduct[0]->category->catName }}</p>
                            @endif
                        </li>
                    </ol>
                </div>
            </div>
            <div class="collectionMain">
                <div class="container">
                    <div class="collectionMainContent">
                        <div class="collectionMainContentRight ">
                            <div class="">
                                <div class="collectionHeader 	">
                                    <div class="row">
                                        <div class="col-md-8 col-8 text-right filterMobileFlex">
                                            <div class="sortByMain">
                                                <form action="{{ route('shop-product-list', $id) }}" method="get"
                                                    id="filterForm">
                                                    <label class="sortBy" for="sortBy">Sắp xếp theo:</label>
                                                    <select id="sortBy" class="form-control" name="filter">
                                                        <option value="1"
                                                            {{ $request->filter == '1' ? 'selected' : '' }}>Dưới 1 triệu
                                                        </option>
                                                        <option value="1to3"
                                                            {{ $request->filter == '1to3' ? 'selected' : '' }}>1 triệu - 3
                                                            triệu</option>
                                                        <option value="3to5"
                                                            {{ $request->filter == '3to5' ? 'selected' : '' }}>3 triệu - 5
                                                            triệu</option>
                                                        <option value="5to10"
                                                            {{ $request->filter == '5to10' ? 'selected' : '' }}>5 triệu - 10
                                                            triệu</option>
                                                        <option value="10"
                                                            {{ $request->filter == '10' ? 'selected' : '' }}>Trên 10 triệu
                                                        </option>
                                                    </select>

                                                    <button type="submit" class="btn btn-primary">Filter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collectionBody">
                                <div class="collectionListProduct">
                                    @foreach ($listProduct as $product)
                                        <div class="proLoop">
                                            <div class="pro_content">
                                                <div class="productImg">
                                                    <a href="{{route('shop-product-detail', $product->id)}}" title="{{ $product->productName }}"
                                                        class="productImgLink">
                                                        <picture>
                                                            <img src="{{ asset('storage/products/' . $product->productImage) }}"
                                                                class="img-fluid lazyloaded"
                                                                alt=" {{ $product->productName }} ">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="productName">
                                                    <a href="{{route('shop-product-detail', $product->id)}}"
                                                        title="{{ $product->productName }}">{{ $product->productName }}</a>
                                                </h3>
                                                <div class="p-price-group">

                                                    <span class="p-price">
                                                        {{ number_format($product->productPrice) }}₫
                                                    </span>
                                                </div>
                                                <div class="p-btn-group">
                                                    <a href="{{ route('shop-cart-add') }}" class="AddCartLoop"
                                                        data-id="{{ $product->id }}"
                                                        data-href="{{ route('shop-list-cart') }}">
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                            y="0px" viewBox="0 0 321.2 321.2"
                                                            style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;"
                                                            xml:space="preserve">
                                                            <path
                                                                d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="productAction">
                                                    <a href="javascript:void:0" class="setQuickview"
                                                        data-handle="ttk-fire-1650" data-toggle="modal"
                                                        data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i
                                                            class="lni lni-search-alt"></i></a>
                                                    <a href="javascript:void:0" class="setWishlist"
                                                        data-handle="ttk-fire-1650"><i class="lni lni-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="text-center">
                                        <div id="pagination" class="clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-wrapper">
                                    <nav>
                                        {{ $listProduct->appends(request()->all())->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
