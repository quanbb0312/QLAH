@extends('shop.master')
@section('content')
    <main>
        <div id="collection">
            <div class="breadcrumb-shop">
                <div class="breadcrumb-wrap container container-xl">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/shop">Trang chủ</a></li>
                        @foreach ($listProduct as $product)
                            <li class="breadcrumb-item active">
                                <p>{{ $product->category->catName }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="collectionMain">
                <div class="container">
                    <div class="collectionMainContent">

                        <div class="collectionMainContentLeft">
                            <h1 class="title">
                                {{ $listProduct->first()->category->catName }}
                            </h1>
                            <div class="collectionFilter">
                                <div class="collectionFilterMobileAction">
                                    <span>BỘ LỌC</span>
                                    <button class="collectionFilterClose">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 409.806 409.806" style="enable-background:new 0 0 409.806 409.806;"
                                            xml:space="preserve">
                                            <path
                                                d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42
								 c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42
								 c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132
								 c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42
								 c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="collectionFilterMobileButton">
                                    <button class="collectionFilterMobile-apply">
                                        ÁP DỤNG
                                    </button>
                                </div>


                                <div class="collectionFilterBlock">
                                    <h4>
                                        Loại sản phẩm
                                    </h4>
                                    <ul class="collectionFilterList">


                                        <li>
                                            <input type="checkbox" id="data-type-p1" value="TTK WATER"
                                                class="checkboxFilter" name="typeFilter">
                                            <label for="data-type-p1">QLAH 1 PC</label>
                                        </li>

                                        <li>
                                            <input type="checkbox" id="data-type-p2" value="TTK FIRE" class="checkboxFilter"
                                                name="typeFilter">
                                            <label for="data-type-p2">QLAH 2 PC</label>
                                        </li>

                                    </ul>

                                </div>


                                <div class="collectionFilterBlock">
                                    <h4>
                                        Thương hiệu
                                    </h4>
                                    <ul class="collectionFilterList">


                                        <li>
                                            <input type="checkbox" id="data-brand-p1" value="PC GAMING"
                                                class="checkboxFilter" name="vendorFilter">
                                            <label for="data-brand-p1">PC GAMING</label>
                                        </li>

                                    </ul>

                                </div>
                                <div class="collectionFilterBlock">
                                    <h4>
                                        Giá sản phẩm
                                    </h4>
                                    <div class="priceRangeBox">
                                        <div id="priceRange" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect"
                                                        style="transform: translate(0%, 0px) scale(1, 1);"></div>
                                                </div>
                                                <div class="noUi-origin"
                                                    style="transform: translate(-1000%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                        tabindex="0" role="slider" aria-orientation="horizontal"
                                                        aria-valuemin="0.0" aria-valuemax="20000000.0" aria-valuenow="0.0"
                                                        aria-valuetext="0.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1"
                                                        tabindex="0" role="slider" aria-orientation="horizontal"
                                                        aria-valuemin="0.0" aria-valuemax="20000000.0"
                                                        aria-valuenow="20000000.0" aria-valuetext="20000000.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="priceRangeValueBox d-flex pt-3">
                                            <input style="display:none;" type="checkbox" id="data-price" value=""
                                                class="checkboxFilter" name="priceFilter">
                                            <span class="example-val" id="priceRangeValue">0₫ - 20,000,000₫</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearFilter">
                                    <a href="javascript:void(0);">Xóa tất cả lựa chọn</a>
                                </div>
                            </div>
                        </div>
                        <div class="collectionMainContentRight ">
                            <div class="">
                                <div class="collectionHeader 	">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-4">
                                            <div class="filterMobile headerTool"><a href=""
                                                    data-type="sidebarAllFilter"><i class="lni lni-funnel"></i> Bộ lọc</a>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-8 col-8 text-right filterMobileFlex">
                                            <form id="sortForm" method="get" action="/your-data-url">
                                                <div class="sortByMain">
                                                    <label class="" for="sortBy">Sắp xếp theo:</label>
                                                    <select id="sortBy" class="form-control" name="sortby">
                                                        <option value="manual">Sản phẩm nổi bật</option>
                                                        <option value="price-ascending" data-filter="price:product=asc">
                                                            Giá: Tăng dần</option>
                                                        <option value="price-descending" data-filter="price:product=desc">
                                                            Giá: Giảm dần</option>
                                                        <!-- Các tùy chọn khác -->
                                                    </select>
                                                </div>
                                            </form>
                                        </div>

                                        <script>
                                            const sortForm = document.getElementById("sortForm");
                                            const sortBySelect = document.getElementById("sortBy");

                                            sortBySelect.addEventListener("change", function() {
                                                sortForm.submit();
                                            });
                                        </script> --}}

                                        <div class="col-md-8 col-8 text-right filterMobileFlex">
                                            <div class="sortByMain">
                                                <form action="" method="get" id="filterForm">
                                                    <label class="sortBy" for="sortBy">Sắp xếp theo:</label>
                                                    <select id="sortBy" class="form-control">
                                                        @foreach ($listProduct as $product)
                                                            <option value="{{ $product->category->catSlug }}">
                                                                {{ $product->productSlug }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-primary">Filter</button>
                                                </form>
                                            </div>
                                        </div>

                                        {{-- <script>
                                            document.getElementById('filterForm').addEventListener('submit', function(event) {
                                                event.preventDefault(); // Prevent the default form submission
                                                applyFilter();
                                            });

                                            function applyFilter() {
                                                const sortBySelect = document.getElementById("sortBy");
                                                const selectedValue = sortBySelect.value;

                                                // Thay đổi URL với giá trị filter đã chọn
                                                const url = "{{ route('shop-product-list') }}?filter=" + encodeURIComponent(selectedValue);
                                                window.location.href = url;
                                            }
                                        </script> --}}

                                    </div>
                                </div>
                            </div>
                            <div class="collectionBody">
                                <div class="collectionListProduct">
                                    @foreach ($listProduct as $product)
                                        <div class="proLoop">
                                            <div class="pro_content">
                                                <div class="productImg">
                                                    <a href="#" title="{{ $product->productName }}"
                                                        class="productImgLink">
                                                        <picture>
                                                            <img src="{{ asset('storage/products/' . $product->productImage) }}"
                                                                class="img-fluid lazyloaded"
                                                                alt=" {{ $product->productName }} ">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="productName">
                                                    <a href="#"
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
