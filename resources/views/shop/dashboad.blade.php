@extends('shop.master')
@section('content')
    <main>
        <h1 class="d-none">
            TITEK
        </h1>
        <section id="slider">
            <div class="container">
                <div class="slider-main">
                    <div class="headerMenuCategories">
                        <div class="headerMenuCategoriesTitle">
                            <i class="lni lni-menu"></i>
                            <span>DANH MỤC NHÓM</span>
                        </div>
                        <nav class="mainNav">
                            <ul class="menuMainList">
                                @foreach ($listCategory as $category)
                                    <li class=" ">
                                        <a href="{{ route('shop-product-list', $category->id) }}"
                                            title="{{ $category->catName }}">{{ $category->catName }}
                                            <i class="lni lni-chevron-down"></i>
                                        </a>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="slider-main-group">
                        <div class="slider-main-group-image">
                            <div class="slider-main-group-image-item">
                                <a href="#" title="Banner " aria-label="Banner 1">
                                    <picture>
                                        <img src="{{ asset('logo/QLAH.png') }}" width="1000" class="img-fluid"
                                            alt="slider-website-1">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="policy">
            <div class="container">
                <div class="policyMain ">
                    <div class="policyItem">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            class="lazyload img-fluid"
                            data-src="https://file.hstatic.net/200000265255/file/static-icons-1_c276878e211c4819b74eef75150bcdab.png"
                            alt="Policy-1" />
                        <div class="policyItemContent">
                            <span>Đảm bảo đúng hẹn</span>
                            <span>Hoàn lại tiền trong 30 ngày</span>
                        </div>
                    </div>
                    <div class="policyItem">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            class="lazyload img-fluid"
                            data-src="https://file.hstatic.net/200000265255/file/static-icons-2_527e480eb3f6439d9c5fe19bc5e9a31f.png"
                            alt="Policy-2" />
                        <div class="policyItemContent">
                            <span>Miễn phí vận chuyển</span>
                            <span>Cho đơn hàng trong bán kính 5km</span>
                        </div>
                    </div>
                    <div class="policyItem">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            class="lazyload img-fluid"
                            data-src="https://file.hstatic.net/200000265255/file/static-icons-3_bf2d3625ab414276a01c726228fd46c0.png"
                            alt="Policy-3" />
                        <div class="policyItemContent">
                            <span>Hỗ trợ trực tuyến</span>
                            <span>Chúng tôi hỗ trợ 24/24</span>
                        </div>
                    </div>
                    <div class="policyItem">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            class="lazyload img-fluid"
                            data-src="https://file.hstatic.net/200000265255/file/static-icons-4_506ec194d9444d30925aaa929ae0e2b3.png"
                            alt="Policy-4" />
                        <div class="policyItemContent">
                            <span>Khuyến mãi</span>
                            <span> Khi build PC tặng kèm quà</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="banner">
            <div class="container">
                <div class="bannerMain">
                    <div class="bannerMainItem banner-effect">
                        <a href="#">
                            <img src="{{ asset('logo/canmau.png') }}" width="2000" class="lazyload img-fluid"
                                alt="banner-1" />
                        </a>
                    </div>
                    <div class="bannerMainItem banner-effect">
                        <a href="#">
                            <img src="{{ asset('logo/tuvan.png') }}" width="2000"class="lazyload img-fluid"
                                alt="banner-2" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="categories">
            <div class="container">
                <div class="sectionTitleAll">
                    <h2>
                        Danh mục sản phẩm
                    </h2>
                </div>
                <div class="categories-main">
                    @foreach ($listCategory as $category)
                        <div class="categories-main-item">
                            <a href="{{ route('shop-product-list', ['id' => $category->id]) }}">
                                <img src="{{ asset('storage/categoryImage/' . $category->catImage) }}"
                                    class="lazyload img-fluid" alt="{{ $category->catName }}">
                            </a>
                            <h3>{{ $category->catName }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="bannerThumb" class="banner_thumb_new">
            <div class="container">
                <a href="#" class="bannerThumbImg">
                    <picture>
                        <img src="{{ asset('logo/backtoschool.png') }}" class="lazyload img-fluid" alt="bannerThumb" />
                    </picture>
                </a>
            </div>
        </section>

        <section id="group-two">
            <div class="container">
                <div class="sectionTitleAll">
                    <h2>
                        <a href="#">{{ $keyboards->catName }}</a>
                    </h2>
                </div>
                <div class="group-one-main-list">
                    <a href="#" class="group-one-main-left">
                        <img src="{{ asset('logo/discount2.png') }}"class="lazyload img-fluid" alt="Gear">
                    </a>
                    <div class="group-two-main group-one-main-right">
                        @php
                            $format = new NumberFormatter('vi-VN', NumberFormatter::CURRENCY);
                        @endphp
                        @foreach ($keyboards->products as $product)
                            <div class="proLoop">
                                <div class="pro_content">
                                    <div class="productImg">
                                        <a href="/" title="{{ $product->productName }}">
                                            <picture>
                                                <img data-src=""
                                                    src="{{ asset('storage/products/' . $product->productImage) }}"
                                                    class="lazyload img-fluid" alt=" {{ $product->productName }}" />
                                            </picture>
                                        </a>
                                    </div>
                                    <h3 class="productName">
                                        <a href="/products/ban-phim-akko-3087-v2-world-tour-tokyo"
                                            title="{{ $product->productName }}">{{ $product->productName }}</a>
                                    </h3>

                                    <div class="p-price-group">

                                        <span class="p-price">
                                            {{ $format->formatCurrency($product->productPrice, 'VND') }}
                                        </span>
                                    </div>
                                    <div class="p-btn-group">
                                        <a href="{{ route('shop-cart-add') }}" class="AddCartLoop"
                                            data-id="{{ $product->id }}" data-href="{{ route('shop-list-cart') }}">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 321.2 321.2"
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
                                            data-handle="ban-phim-akko-3087-v2-world-tour-tokyo" data-toggle="modal"
                                            data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i
                                                class="lni lni-search-alt"></i></a>
                                        <a href="javascript:void:0" class="setWishlist"
                                            data-handle="ban-phim-akko-3087-v2-world-tour-tokyo"><i
                                                class="lni lni-heart"></i></a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="bannerThumb">
            <div class="container">
                <a href="#" class="bannerThumbImg">
                    <picture>
                        <img src="{{ asset('logo/backtoschool.png') }}"class="lazyload img-fluid" alt="bannerThumb" />
                    </picture>
                </a>
            </div>
        </section>
        <section id="group-two">
            <div class="container">
                <div class="sectionTitleAll">
                    <h2>
                        <a href="/collections/gear">{{ $screens->catName }}</a>
                    </h2>
                </div>
                <div class="group-one-main-list">
                    <a href="#" class="group-one-main-left">
                        <img src="{{ asset('logo/discount1.png') }}"class="lazyload img-fluid" alt="Gear">
                    </a>
                    <div class="group-two-main group-one-main-right">
                        @php
                            $format = new NumberFormatter('vi-VN', NumberFormatter::CURRENCY);
                        @endphp
                        @foreach ($screens->products as $product)
                            <div class="proLoop">
                                <div class="pro_content">
                                    <div class="productImg">
                                        <a href="" title="{{ $product->productName }}">
                                            <picture>
                                                <img data-src=""
                                                    src="{{ asset('storage/products/' . $product->productImage) }}"
                                                    class="lazyload img-fluid" alt=" {{ $product->productName }}" />
                                            </picture>
                                        </a>
                                    </div>
                                    <h3 class="productName">
                                        <a href=""
                                            title="{{ $product->productName }}">{{ $product->productName }}</a>
                                    </h3>

                                    <div class="p-price-group">

                                        <span class="p-price">
                                            {{ $format->formatCurrency($product->productPrice, 'VND') }}
                                        </span>
                                    </div>
                                    <div class="p-btn-group">
                                        <a href="{{ route('shop-cart-add') }}" class="AddCartLoop"
                                            data-id="{{ $product->id }}" data-href="{{ route('shop-list-cart') }}">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 321.2 321.2"
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
                                            data-handle="ban-phim-akko-3087-v2-world-tour-tokyo" data-toggle="modal"
                                            data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i
                                                class="lni lni-search-alt"></i></a>
                                        <a href="javascript:void:0" class="setWishlist"
                                            data-handle="ban-phim-akko-3087-v2-world-tour-tokyo"><i
                                                class="lni lni-heart"></i></a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="vendor">
            <div class="container">
                <div class="sectionTitleAll">
                    <h2>
                        Đối tác
                    </h2>
                </div>
                <div class="vendor-main">
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/msi_logo_83cc2bc36d7440948f60b75989b6d3e3.png"
                                alt="Vendor-1" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/nzxt-logo-png_4b19c9a8dcf9445ca1cc4781ea688a4a.png"
                                alt="Vendor-2" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/cooler_master_logo_7f43bea90086408bab2847ead7ac8f4a.png"
                                alt="Vendor-3" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/galax_logo__1__4f2acdeaf9b3484b88f0d9030aff1e15.png"
                                alt="Vendor-4" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/techzones-asus_a9b63dccd97b49e49a9a948e9008b81d.jpg"
                                alt="Vendor-5" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/deepcool-logo-black_d01590b9aaea497c921e397e045e0b52.png"
                                alt="Vendor-6" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/techzones-corsair-logo_3314e79103754ab190267f869ffee3e3.png"
                                alt="Vendor-7" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/techzones-cooler-master_9c28bfd736c44726935f04b7dcf0e1ec.png"
                                alt="Vendor-8" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/techzones-dell_47f0953d021f4bf68d84acf66c9c8e18.jpg"
                                alt="Vendor-9" />
                        </a>
                    </div>
                    <div class="vendor-main-item">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid" data-src="" alt="Vendor-10" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
