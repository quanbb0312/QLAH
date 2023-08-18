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



                    {{-- <div class="bannerMainItem banner-effect">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/banner_900x500_1.3_0b52682fe00d43b98ffbc58561a2f20d.jpg"
                                alt="banner-3" />
                        </a>
                    </div> --}}

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
                            <a href="#">
                                <img src="{{ asset('storage/categoryImage/' . $category->catImage) }}"
                                    class="lazyload img-fluid" alt="{{ $category->catName }}">
                            </a>
                            <h3>{{ $category->catName }}</h3>
                        </div>
                    @endforeach


                    {{-- 
                    <div class="categories-main-item">
                        <a href="#">
                            <img src="{{ asset('logo/linhkien.') }}" class="lazyload img-fluid" alt="categoriesContent-2" />
                        </a>
                        <h3>Linh Kiện PC</h3>
                    </div>
                    <div class="categories-main-item">
                        <a href="https://titekvn.com/collections/gear">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/catalogue_3_bf7d5eca25fa42b9bb71af1eec2b67dc.png"
                                alt="categoriesContent-3" />
                        </a>
                        <h3>Bàn Phím</h3>
                        <ul>

                        </ul>
                    </div>









                    <div class="categories-main-item">
                        <a href="https://titekvn.com/collections/man-hinh">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/catalogue_4_e33a9c03b1f24a4da8029a83a2aa8b49.png"
                                alt="categoriesContent-4" />
                        </a>
                        <h3>Màn Hình </h3>
                        <ul>

                        </ul>
                    </div>









                    <div class="categories-main-item">
                        <a href="https://titekvn.com/collections/laptop">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                class="lazyload img-fluid"
                                data-src="https://file.hstatic.net/200000680123/file/catalogue_5_16ecf6c451064e25b42fa41e704b7417.png"
                                alt="categoriesContent-5" />
                        </a>
                        <h3>Laptop</h3>
                        <ul>

                        </ul>
                    </div>



 --}}

                </div>
            </div>
        </section>


        {{-- <section id="group-one">
            <div class="container">
                <div class="sectionTitleAll">
                    <h2>
                        <a href="/collections/pc-build-san">PC Gaming / Workstation</a>
                    </h2>
                </div>
                <div class="group-one-main-list">
                    <a href="https://titekvn.com/collections/pc-build-san" class="group-one-main-left">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            class="lazyload img-fluid"
                            data-src="https://file.hstatic.net/200000680123/file/banner_250x365_1__2__1669d8491f98406d8f4ed92b3aef6e87.jpg"
                            alt="PC Gaming / Workstation">
                    </a>
                    <div class="group-one-main group-one-main-right">



                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">




                                    <a href="/products/ttk-fire-1650" title="TTK FIRE - 1650" class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_medium.jpg"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_grande.jpg"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 1650 " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_medium.jpg"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_large.jpg"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 1650 " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-fire-1650" title="TTK FIRE - 1650">TTK FIRE - 1650</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        11,000,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1107597774">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-1650"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-1650"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>





















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">






                                    <a href="/products/ttk-fire-1650-v2" title="TTK FIRE - 1650 v2"
                                        class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 1650 v2 " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 1650 v2 " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-fire-1650-v2" title="TTK FIRE - 1650 v2">TTK FIRE - 1650 v2</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        12,500,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1109501086">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-1650-v2"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-1650-v2"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>





















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">






                                    <a href="/products/ttk-fire-3050" title="TTK FIRE - 3050" class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 3050 " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 3050 " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-fire-3050" title="TTK FIRE - 3050">TTK FIRE - 3050</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        15,000,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1109500956">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-3050"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-3050"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>


















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">




                                    <a href="/products/ttk-fire-3060" title="TTK FIRE - 3060" class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 3060 " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK FIRE - 3060 " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-fire-3060" title="TTK FIRE - 3060">TTK FIRE - 3060</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        17,000,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1105772694">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-3060"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-3060"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>
























                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">








                                    <a href="/products/ttk-water-a3060" title="TTK WATER - A3060" class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - A3060 " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - A3060 " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-water-a3060" title="TTK WATER - A3060">TTK WATER - A3060</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        20,500,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1109467930">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-a3060"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-a3060"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>





















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">






                                    <a href="/products/ttk-water-b3060-ti" title="TTK WATER - B3060 TI"
                                        class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - B3060 TI " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - B3060 TI " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-water-b3060-ti" title="TTK WATER - B3060 TI">TTK WATER - B3060
                                        TI</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        25,500,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1109470461">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-b3060-ti"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-b3060-ti"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>





















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">






                                    <a href="/products/ttk-water-b3060-ti-w" title="TTK WATER - B3060 TI W"
                                        class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - B3060 TI W " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - B3060 TI W " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-water-b3060-ti-w" title="TTK WATER - B3060 TI W">TTK WATER -
                                        B3060 TI W</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        30,500,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1109499852">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-b3060-ti-w"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-b3060-ti-w"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>





















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">






                                    <a href="/products/ttk-water-4070" title="TTK WATER - B4070" class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/189775ca-cb0b-44fc-a169-1cae1be3cf81_1eaa8cef0a6846fe9a681dd911f85a58_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/189775ca-cb0b-44fc-a169-1cae1be3cf81_1eaa8cef0a6846fe9a681dd911f85a58_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - B4070 " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/347589121_620726483440809_7603278720253817486_n_b161b94d8278471d816990f534ad4683_medium.jpg"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/347589121_620726483440809_7603278720253817486_n_b161b94d8278471d816990f534ad4683_grande.jpg"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - B4070 " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-water-4070" title="TTK WATER - B4070">TTK WATER - B4070</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        32,500,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1105917449">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-4070"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-4070"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>





















                        <div class="proLoop">
                            <div class="pro_content">
                                <div class="productImg">






                                    <a href="/products/ttk-water-c3060-ti-w" title="TTK WATER - C3060 TI W"
                                        class="productImgLink">
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_grande.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - C3060 TI W " />
                                        </picture>
                                        <picture>
                                            <source
                                                srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_medium.png"
                                                media="(max-width: 767px)" />
                                            <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_large.png"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                                class="lazyload img-fluid" alt=" TTK WATER - C3060 TI W " />
                                        </picture>
                                    </a>
                                </div>
                                <h3 class="productName">
                                    <a href="/products/ttk-water-c3060-ti-w" title="TTK WATER - C3060 TI W">TTK WATER -
                                        C3060 TI W</a>
                                </h3>

                                <div class="p-price-group">

                                    <span class="p-price">

                                        31,500,000₫

                                    </span>
                                </div>
                                <div class="p-btn-group">


                                    <a href="" class="setAddCartLoop" data-id="1109500231">
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

                                    <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-c3060-ti-w"
                                        data-toggle="modal" data-target="#quickviewLogin"
                                        data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                    <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-c3060-ti-w"><i
                                            class="lni lni-heart"></i></a>

                                </div>
                            </div>
                        </div>






                    </div>

                </div>
            </div>
        </section> --}}




        <section id="bannerThumb" class="banner_thumb_new">
            <div class="container">
                <a href="https://www.facebook.com/TiTekPC/posts/pfbid0e48MCEWrpCF4fwAuFDp5zPXnLPzDap9uPaBVdCw9rkPdg2tbqwQmYpwUak5owNhzl"
                    class="bannerThumbImg">
                    <picture>
                        <img src="{{ asset('logo/backtoschool.png') }}" class="lazyload img-fluid" {{-- data-src="https://file.hstatic.net/200000680123/file/backtoschool_1200x180_20c4808274fc4ba188a2fe511bffd58e.jpg" --}}
                            alt="bannerThumb" />
                    </picture>
                </a>
            </div>
        </section>

        <section id="group-two">
            <div class="container">
                <div class="sectionTitleAll">
                    <h2>
                        <a href="/collections/gear">{{ $keyboards->catName }}</a>
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

                                        <a href="" class="setAddCartLoop" data-id="1108658751">
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
                <a href="https://www.facebook.com/TiTekPC/posts/pfbid0e48MCEWrpCF4fwAuFDp5zPXnLPzDap9uPaBVdCw9rkPdg2tbqwQmYpwUak5owNhzl"
                    class="bannerThumbImg">
                    <picture>
                        <img src="{{ asset('logo/backtoschool.png') }}"class="lazyload img-fluid" alt="bannerThumb" />
                    </picture>
                </a>
            </div>
        </section>

        {{-- 
        <section id="group-tab-one" class="group-tab-index">
            <div class="container">
                <h2>
                    <a href="/">{{ $screens->catName }}</a>
                </h2>
                <div class="group-tab-one-main">
                    <a href="#" class="group-tab-one-main-left">
                        <img src="{{ asset('logo/discount1.png') }}" class="img-fluid" alt="Responsive image"
                            alt="groupbanner">
                    </a>
                    <div class="group-tab-one-main-right">
                        <div class="group-tab-one-main-right-slider group-tab-index-product">
                            <div class="product-list">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section> --}}
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

                                        <a href="" class="setAddCartLoop" data-id="1108658751">
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
