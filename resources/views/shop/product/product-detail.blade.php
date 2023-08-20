@extends('shop.master')
@section('content')
    <main>
        <div id="productPage">
            <div class="breadcrumb-shop">
                <div class="breadcrumb-wrap container container-xl">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboad') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><span>{{ $product->productName }}</span></li>

                    </ol>
                </div>
            </div>
            <div class="productWrap">
                <div class="container">
                    <div class="productWrapAll">
                        <div class="productWrapLeft">
                            <div class="tns-outer" id="tns2-ow">
                                <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"
                                    style="display: none;"><button data-controls="prev" tabindex="-1"
                                        aria-controls="tns2">prev</button><button data-controls="next" tabindex="-1"
                                        aria-controls="tns2">next</button></div>
                                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                                    <span class="current">1</span> of 1
                                </div>
                                <div id="tns2-mw" class="tns-ovh">
                                    <div class="tns-inner" id="tns2-iw">
                                        <div class="featureImage  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                            id="tns2"
                                            style="transition-duration: 0s; transform: translate3d(0%, 0px, 0px);">

                                            <a href="#"> </a>
                                            {{-- data-source="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_master.jpg"
                                                class="thumbImageItem swiper-slide tns-item tns-slide-active active-slider"
                                                data-index="1"
                                                data-zoom="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_master.jpg"
                                                data-id="1331808035" id="tns2-item0"> --}}
                                            <picture>
                                                <img src="{{ asset('storage/products/' . $product->productImage) }}"
                                                    alt=" " class="img-fluid">
                                            </picture>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tns-outer" id="tns1-ow">
                                <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"
                                    style="display: none;"><button data-controls="prev" tabindex="-1"
                                        aria-controls="tns1">prev</button><button data-controls="next" tabindex="-1"
                                        aria-controls="tns1">next</button></div>
                                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                                    <span class="current">1</span> of 1
                                </div>

                            </div>
                        </div>
                        <div class="productWrapRight">
                            <div class="productWrapDetail">

                                <h1 class="productTitle">{{ $product->productName }}</h1>
                                <div class="productInfoMain">

                                </div>

                                <div class="productVendor">
                                    <strong>Loại sản phẩm: </strong>{{ $product->category->catName }}
                                </div>

                                <div class="productPrice">
                                    <div class="productPriceBox">
                                        <span class="productPriceMain">{{ number_format($product->productPrice) }}₫</span>

                                    </div>

                                </div>








                                <div class="productShort">
                                    <p>Thông tin chi tiết:</p>
                                    <p>{{ $product->productDetails }}</p>

                                </div>

                                <div class="product-swatch">


                                    <div class="product-sw-line">
                                        <div class="product-sw-title">
                                            Tiêu đề

                                        </div>
                                        <div class="product-sw-select">



                                            <span class="product-sw-select-item">
                                                <input type="radio" data-value="{{ $product->productSlug }}"
                                                    name="product-choose-tieu-de" data-name="option1"
                                                    value="{{ $product->productSlug }}" class="trigger-option-sw d-none"
                                                    id="product-choose-tieu-de-1">
                                                <label for="product-choose-tieu-de-1"
                                                    class="product-sw-select-item-span">{{ $product->productSlug }}</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="productActionMain">
                                    <div class="productAction">
                                        <button type="button" href="{{ route('shop-cart-add') }}"
                                            class="hoverOpacity AddCartLoop" id="addToCart" data-id="{{ $product->id }}"
                                            data-href="{{ route('shop-list-cart') }}">
                                            Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="productWrapSidebar">
                                <div class="productWrapSidebarGroup">




                                    <div class="productWrapSidebarItem">
                                        <img src="https://file.hstatic.net/200000265255/file/static-icons-2_dfa67a48c16c4ba788cd269ea5b0e51b.png"
                                            alt="ItemSidebar">
                                        <div class="productWrapSidebarContent">
                                            <h5>Đảm bảo đúng hẹn</h5>
                                            <p>Hoàn lại tiền trong 30 ngày</p>
                                        </div>
                                    </div>




                                    <div class="productWrapSidebarItem">
                                        <img src="https://file.hstatic.net/200000265255/file/static-icons-1_b925e91e6ad74e8d9ecbac3f725b17e4.png"
                                            alt="ItemSidebar">
                                        <div class="productWrapSidebarContent">
                                            <h5>Miễn phí vận chuyển</h5>
                                            <p>Cho đơn hàng trong bán kính 5km</p>
                                        </div>
                                    </div>




                                    <div class="productWrapSidebarItem">
                                        <img src="https://file.hstatic.net/200000265255/file/static-icons-4_24025647d256438eb38834a0d9f9ae78.png"
                                            alt="ItemSidebar">
                                        <div class="productWrapSidebarContent">
                                            <h5>Hổ trợ trực tuyến</h5>
                                            <p>Chúng tôi hỗ trợ 24/24</p>
                                        </div>
                                    </div>




                                    <div class="productWrapSidebarItem">
                                        <img src="https://file.hstatic.net/200000265255/file/static-icons-3_29b6268e726d4258a7b3413a8d94f23d.png"
                                            alt="ItemSidebar">
                                        <div class="productWrapSidebarContent">
                                            <h5>Khuyến mãi</h5>
                                            <p>Khi build PC tặng kèm quà (Liên hệ)</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="productRelate">
                        <h2>
                            Sản phẩm liên quan
                        </h2>
                        <div class="productRelateMain slick-initialized slick-slider"><button type="button"
                                class="slick-prev slick-arrow slick-disabled" aria-disabled="true"
                                style="display: block;"><i class="lni lni-chevron-left"></i></button>

                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 2504px; transform: translate3d(0px, 0px, 0px);">
                                    @foreach ($listProductOfCate as $product)
                                        <div class="proLoop slick-slide slick-current slick-active" data-slick-index="0"
                                            aria-hidden="false" tabindex="0" style="width: 313px;">
                                            <div class="pro_content">
                                                <div class="productImg">
                                                    <a href="/products/ttk-fire-1650-v2"
                                                        title="{{ $product->productName }}" class="productImgLink"
                                                        tabindex="0">
                                                        <picture>
                                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_large.png"
                                                                src="{{ asset('storage/products/' . $product->productImage) }}"
                                                                class="img-fluid ls-is-cached lazyloaded"
                                                                alt=" {{ $product->productName }} ">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="productName">
                                                    <a href="/products/ttk-fire-1650-v2"
                                                        title="{{ $product->productName }}"
                                                        tabindex="0">{{ $product->productName }}</a>
                                                </h3>
                                                <div class="p-price-group">
                                                    <span class="p-price">
                                                        {{ number_format($product->productPrice) }}₫
                                                    </span>
                                                </div>
                                                <div class="p-btn-group">
                                                    <a href="{{ route('shop-cart-add') }}" data-id="{{ $product->id }}"
                                                        class="AddCartLoop" data-href="{{ route('shop-list-cart') }}"
                                                        tabindex="0">
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
                                                        data-handle="ttk-fire-1650-v2" data-toggle="modal"
                                                        data-target="#quickviewLogin" data-whatever="@quickviewLogin"
                                                        tabindex="0"><i class="lni lni-search-alt"></i></a>
                                                    <a href="javascript:void:0" class="setWishlist"
                                                        data-handle="ttk-fire-1650-v2" tabindex="0"><i
                                                            class="lni lni-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <button type="button" class="slick-next slick-arrow" style="display: block;"
                                aria-disabled="false"><i class="lni lni-chevron-right"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
