@extends('shop.master')
@section('content')
<main>
    <div id="collection">

        <div class="breadcrumb-shop">
            <div class="breadcrumb-wrap container container-xl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>





                    <li class="breadcrumb-item active"><span>Titek PC Build</span></li>



                </ol>
            </div>
        </div>
        <div class="collectionMain">
            <div class="container">
                <div class="collectionMainContent">

                    <div class="collectionMainContentLeft">
                        <h1 class="title">
                            Titek PC Build
                        </h1>
                        <div class="collectionFilter">
                            <div class="collectionFilterMobileAction">
                                <span>BỘ LỌC</span>
                                <button class="collectionFilterClose">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 409.806 409.806" style="enable-background:new 0 0 409.806 409.806;" xml:space="preserve">
                                        <path d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42
								 c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42
								 c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132
								 c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42
								 c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z"></path>
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
                                        <input type="checkbox" id="data-type-p1" value="TTK WATER" class="checkboxFilter" name="typeFilter">
                                        <label for="data-type-p1">TTK WATER</label>
                                    </li>

                                    <li>
                                        <input type="checkbox" id="data-type-p2" value="TTK FIRE" class="checkboxFilter" name="typeFilter">
                                        <label for="data-type-p2">TTK FIRE</label>
                                    </li>

                                </ul>

                            </div>


                            <div class="collectionFilterBlock">
                                <h4>
                                    Thương hiệu
                                </h4>
                                <ul class="collectionFilterList">


                                    <li>
                                        <input type="checkbox" id="data-brand-p1" value="PC GAMING" class="checkboxFilter" name="vendorFilter">
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
                                                <div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(-1000%, 0px); z-index: 5;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="20000000.0" aria-valuenow="0.0" aria-valuetext="0.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="20000000.0" aria-valuenow="20000000.0" aria-valuetext="20000000.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceRangeValueBox d-flex pt-3">
                                        <input style="display:none;" type="checkbox" id="data-price" value="" class="checkboxFilter" name="priceFilter">
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
                                        <div class="filterMobile headerTool"><a href="" data-type="sidebarAllFilter"><i class="lni lni-funnel"></i> Bộ lọc</a></div>
                                    </div>

                                    <div class="col-md-8 col-8 text-right filterMobileFlex">
                                        <div class="sortByMain">
                                            <label class="" for="sortBy">Sắp xếp theo:</label>
                                            <select id="sortBy" class="form-control">

                                                <option value="manual">Sản phẩm nổi bật</option>

                                                <option value="price-ascending" data-filter="&amp;sortby=(price:product=asc)">Giá: Tăng dần</option>
                                                <option value="price-descending" data-filter="&amp;sortby=(price:product=desc)">Giá: Giảm dần</option>
                                                <option value="title-ascending" data-filter="&amp;sortby=(title:product=asc)">Tên: A-Z</option>
                                                <option value="title-descending" data-filter="&amp;sortby=(price:product=desc)">Tên: Z-A</option>
                                                <option value="created-ascending" data-filter="&amp;sortby=(updated_at:product=desc)">Cũ nhất</option>
                                                <option value="created-descending" data-filter="&amp;sortby=(updated_at:product=asc)">Mới nhất</option>
                                                <option value="best-selling" data-filter="&amp;sortby=(sold_quantity:product=desc)">Bán chạy nhất</option>
                                                <option value="quantity-descending">Tồn kho: Giảm dần</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="collectionBody">
                            <div class="collectionListProduct">














                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">




                                            <a href="/products/ttk-fire-1650" title="TTK FIRE - 1650" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_medium.jpg" data-srcset="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_medium.jpg" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_grande.jpg" src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_grande.jpg" class="img-fluid lazyloaded" alt=" TTK FIRE - 1650 ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_medium.jpg" data-srcset="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_medium.jpg" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_large.jpg" src="//product.hstatic.net/200000680123/product/pc_fire_1650_ef13964a0d60485d8bc2ee83a35466c5_large.jpg" class="img-fluid ls-is-cached lazyloaded" alt=" TTK FIRE - 1650 ">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-1650" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-1650"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>





















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">






                                            <a href="/products/ttk-fire-1650-v2" title="TTK FIRE - 1650 v2" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_grande.png" src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_grande.png" class="img-fluid lazyloaded" alt=" TTK FIRE - 1650 v2 ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_large.png" src="//product.hstatic.net/200000680123/product/ttk_fire_1650_matrexx_db7eb0a72b04485e87a6de92f1364ede_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK FIRE - 1650 v2 ">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-1650-v2" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-1650-v2"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>





















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">






                                            <a href="/products/ttk-fire-3050" title="TTK FIRE - 3050" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_medium.png" data-srcset="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_grande.png" src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_grande.png" class="img-fluid lazyloaded" alt=" TTK FIRE - 3050 ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_medium.png" data-srcset="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_large.png" src="//product.hstatic.net/200000680123/product/1a7cba9a-8c0b-421d-b661-e5517f2d56bf_8598f3ac7b2c40719121814101a18ab8_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK FIRE - 3050 ">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-3050" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-3050"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>


















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">




                                            <a href="/products/ttk-fire-3060" title="TTK FIRE - 3060" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_grande.png" src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_grande.png" class="img-fluid lazyloaded" alt=" TTK FIRE - 3060 ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_large.png" src="//product.hstatic.net/200000680123/product/ttk_fire_3060_24c49abef1dc4f8ca6226069955a953b_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK FIRE - 3060 ">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-fire-3060" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-fire-3060"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
























                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">








                                            <a href="/products/ttk-water-a3060" title="TTK WATER - A3060" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_grande.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_grande.png" class="img-fluid lazyloaded" alt=" TTK WATER - A3060 ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_large.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060_talos_e3__1__258730a5a6fd4fe4a308dbf9526b0371_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK WATER - A3060 ">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-a3060" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-a3060"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>





















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">






                                            <a href="/products/ttk-water-b3060-ti" title="TTK WATER - B3060 TI" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_grande.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_grande.png" class="img-fluid lazyloaded" alt=" TTK WATER - B3060 TI ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_large.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_macube_110_35f3900ad1564d2aa7e75071b75f409f_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK WATER - B3060 TI ">
                                                </picture>
                                            </a>
                                        </div>
                                        <h3 class="productName">
                                            <a href="/products/ttk-water-b3060-ti" title="TTK WATER - B3060 TI">TTK WATER - B3060 TI</a>
                                        </h3>

                                        <div class="p-price-group">

                                            <span class="p-price">

                                                25,500,000₫

                                            </span>
                                        </div>
                                        <div class="p-btn-group">


                                            <a href="" class="setAddCartLoop" data-id="1109470461">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-b3060-ti" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-b3060-ti"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>





















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">






                                            <a href="/products/ttk-water-b3060-ti-w" title="TTK WATER - B3060 TI W" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_grande.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_grande.png" class="img-fluid lazyloaded" alt=" TTK WATER - B3060 TI W ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_large.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_skytwo_white_417065c2a4304d68b187f0e189967bb6_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK WATER - B3060 TI W ">
                                                </picture>
                                            </a>
                                        </div>
                                        <h3 class="productName">
                                            <a href="/products/ttk-water-b3060-ti-w" title="TTK WATER - B3060 TI W">TTK WATER - B3060 TI W</a>
                                        </h3>

                                        <div class="p-price-group">

                                            <span class="p-price">

                                                30,500,000₫

                                            </span>
                                        </div>
                                        <div class="p-btn-group">


                                            <a href="" class="setAddCartLoop" data-id="1109499852">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-b3060-ti-w" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-b3060-ti-w"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>





















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">






                                            <a href="/products/ttk-water-4070" title="TTK WATER - B4070" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/189775ca-cb0b-44fc-a169-1cae1be3cf81_1eaa8cef0a6846fe9a681dd911f85a58_medium.png" data-srcset="//product.hstatic.net/200000680123/product/189775ca-cb0b-44fc-a169-1cae1be3cf81_1eaa8cef0a6846fe9a681dd911f85a58_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/189775ca-cb0b-44fc-a169-1cae1be3cf81_1eaa8cef0a6846fe9a681dd911f85a58_grande.png" src="//product.hstatic.net/200000680123/product/189775ca-cb0b-44fc-a169-1cae1be3cf81_1eaa8cef0a6846fe9a681dd911f85a58_grande.png" class="img-fluid lazyloaded" alt=" TTK WATER - B4070 ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/347589121_620726483440809_7603278720253817486_n_b161b94d8278471d816990f534ad4683_medium.jpg" data-srcset="//product.hstatic.net/200000680123/product/347589121_620726483440809_7603278720253817486_n_b161b94d8278471d816990f534ad4683_medium.jpg" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/347589121_620726483440809_7603278720253817486_n_b161b94d8278471d816990f534ad4683_grande.jpg" src="//product.hstatic.net/200000680123/product/347589121_620726483440809_7603278720253817486_n_b161b94d8278471d816990f534ad4683_grande.jpg" class="img-fluid ls-is-cached lazyloaded" alt=" TTK WATER - B4070 ">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-4070" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-4070"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>





















                                <div class="proLoop">
                                    <div class="pro_content">
                                        <div class="productImg">






                                            <a href="/products/ttk-water-c3060-ti-w" title="TTK WATER - C3060 TI W" class="productImgLink">
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_grande.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_grande.png" class="img-fluid lazyloaded" alt=" TTK WATER - C3060 TI W ">
                                                </picture>
                                                <picture>
                                                    <source srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_medium.png" data-srcset="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_medium.png" media="(max-width: 767px)">
                                                    <img data-src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_large.png" src="//product.hstatic.net/200000680123/product/ttk_water_3060ti_air_903_white_f5eaf75c68e246ddaffb1beb07cf4f4a_large.png" class="img-fluid ls-is-cached lazyloaded" alt=" TTK WATER - C3060 TI W ">
                                                </picture>
                                            </a>
                                        </div>
                                        <h3 class="productName">
                                            <a href="/products/ttk-water-c3060-ti-w" title="TTK WATER - C3060 TI W">TTK WATER - C3060 TI W</a>
                                        </h3>

                                        <div class="p-price-group">

                                            <span class="p-price">

                                                31,500,000₫

                                            </span>
                                        </div>
                                        <div class="p-btn-group">


                                            <a href="" class="setAddCartLoop" data-id="1109500231">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.2 321.2" style="enable-background:new 0 0 321.2 321.2;fill: #fff;width: 17px;margin-top: -5px;" xml:space="preserve">
                                                    <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="productAction">

                                            <a href="javascript:void:0" class="setQuickview" data-handle="ttk-water-c3060-ti-w" data-toggle="modal" data-target="#quickviewLogin" data-whatever="@quickviewLogin"><i class="lni lni-search-alt"></i></a>
                                            <a href="javascript:void:0" class="setWishlist" data-handle="ttk-water-c3060-ti-w"><i class="lni lni-heart"></i></a>

                                        </div>
                                    </div>
                                </div>







                            </div>
                            <div class="text-center">
                                <div id="pagination" class="clearfix">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection