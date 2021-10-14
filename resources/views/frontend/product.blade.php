@extends('frontend.layout.main')

@section('main-content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="/frontend/index.html">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
            <span> <i class="fa fa-caret-right"> </i> </span>
            <a href="/frontend/shop-gird.html">Chi tiết sảm phẩm </a>
            <span>{{ $product->name }}</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->
    </div>
</div>
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <!-- SINGLE-PRODUCT-DESCRIPTION START -->
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <div class="single-product-view">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="thumbnail_1">
                            <div class="single-product-image">
                                <img src=" {{ asset($product->image) }}" alt="single-product-image" />
                                <a class="new-mark-box" href="/frontend/#">new</a>
                                <a class="fancybox" href="/frontend/img/product/sale/1.jpg" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="tab-pane" id="thumbnail_2">
                            <div class="single-product-image">
                                <img src="/frontend/img/product/sale/3.jpg" alt="single-product-image" />
                                <a class="new-mark-box" href="/frontend/#">new</a>
                                <a class="fancybox" href="/frontend/img/product/sale/3.jpg" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="tab-pane" id="thumbnail_3">
                            <div class="single-product-image">
                                <img src="/frontend/img/product/sale/9.jpg" alt="single-product-image" />
                                <a class="new-mark-box" href="/frontend/#">new</a>
                                <a class="fancybox" href="/frontend/img/product/sale/9.jpg" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="tab-pane" id="thumbnail_4">
                            <div class="single-product-image">
                                <img src="/frontend/img/product/sale/13.jpg" alt="single-product-image" />
                                <a class="new-mark-box" href="/frontend/#">new</a>
                                <a class="fancybox" href="/frontend/img/product/sale/13.jpg" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="tab-pane" id="thumbnail_5">
                            <div class="single-product-image">
                                <img src="/frontend/img/product/sale/7.jpg" alt="single-product-image" />
                                <a class="new-mark-box" href="/frontend/#">new</a>
                                <a class="fancybox" href="/frontend/img/product/sale/7.jpg" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="tab-pane" id="thumbnail_6">
                            <div class="single-product-image">
                                <img src="/frontend/img/product/sale/12.jpg" alt="single-product-image" />
                                <a class="new-mark-box" href="/frontend/#">new</a>
                                <a class="fancybox" href="/frontend/img/product/sale/12.jpg" data-fancybox-group="gallery"><span class="btn large-btn">Phóng to <i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="select-product">
                    <!-- Nav tabs -->

                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                <div class="single-product-descirption">
                    <h2>{{ $product->name }}</h2>

                    <div class="single-product-price">
                        <h2>{{ number_format($product->sale,0,",",".") }}₫ </h2>
                    </div>

                    @if($product->stock > 0)
                    <div class="single-product-desc">
                        <div class="product-in-stock">
                            <p><span>Còn hàng</span></p>
                        </div>
                    </div>
                    @endif

                    <div class="single-product-quantity">
                        <p class="small-title">Số lượng</p>
                        <div class="cart-quantity">
                            <div class="cart-plus-minus-button single-qty-btn">
                                <input class="cart-plus-minus sing-pro-qty" type="text" name="qtybutton" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="single-product-size">
                        <p class="small-title">kích thước </p>
                        <select name="product-size" id="product-size">
                            <option value="">S</option>
                            <option value="">M</option>
                            <option value="">L</option>
                        </select>
                    </div>
                    <div class="single-product-color">
                        <p class="small-title">Màu sắc </p>
                        <a href="/frontend/#"><span></span></a>
                        <a class="color-blue" href="/frontend/#"><span></span></a>
                    </div>
                    <div class="single-product-add-cart">
                        <a class="add-cart-text" title="Add to cart" href="/frontend/#">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SINGLE-PRODUCT-DESCRIPTION END -->
        <!-- SINGLE-PRODUCT INFO TAB START -->
        <div class="row">
            <div style="margin-top:50px;" class="col-sm-12">
                <div class="product-more-info-tab">
                    <!-- Nav tabs -->
                    <ul  class="nav nav-tabs more-info-tab">
                        <li  class="active"><a href="/frontend/#moreinfo" data-toggle="tab">Thông tin chi tiết</a></li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="moreinfo">
                            <div class="tab-description">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="tab-pane" id="datasheet">
                            <div class="deta-sheet">
                                <table class="table-data-sheet">
                                    <tbody>
                                    <tr class="odd">
                                        <td>Xuất xứ</td>
                                        <td>Thụy Sỹ</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="td-bg">Thương hiệu</td>
                                        <td class="td-bg">Frederique Constant (FC)</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Loại máy</td>
                                        <td>Cơ (Automatic)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="review">
                            <div class="row tab-review-row">
                                <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
                                    <div class="tab-rating-box">
                                        <span>Vote</span>
                                        <div class="rating-box">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                        </div>
                                        <div class="review-author-info">
                                            <strong>Sản phẩm tin cậy</strong>
                                            <span>Top sản phẩm bán chạy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
                                    <div class="write-your-review">
                                        <p><strong>Thêm đánh giá </strong></p>
                                        <p>rất tuyết vời </p>
                                        <span class="usefull-comment">Bạn có thấy bình luận này hữu ích? <span>Yes</span><span>No</span></span>
                                        <a href="/frontend/#">Báo cáo lạm dụng </a>
                                    </div>
                                </div>
                                <a href="/frontend/#" class="write-review-btn">Thêm đánh giá !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SINGLE-PRODUCT INFO TAB END -->
        <!-- RELATED-PRODUCTS-AREA START -->
        <div class="row">

        </div>
        <!-- RELATED-PRODUCTS-AREA END -->
    </div>
    <!-- RIGHT SIDE BAR START -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <!-- SINGLE SIDE BAR START -->
        <div class="single-product-right-sidebar">
            <h2 class="left-title">CÁC SẢN PHẨM ĐÃ XEM</h2>
            <ul>
                @foreach($viewedProducts as $product)
                <li>
                    <a href="{{ route('shop.product',['slug' => $product->slug]) }}"><img style="width:100px; border:none;" src="{{ asset($product->image) }}" alt="" /></a>
                    <div class="r-sidebar-pro-content">
                        <h5><a href="{{ route('shop.product',['slug' => $product->slug]) }}">{{ $product->name }}</a></h5>
                        <p>{{ number_format($product->sale,0,",",".") }}₫</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- SINGLE SIDE BAR END -->
        <!-- SINGLE SIDE BAR START -->

        <!-- SINGLE SIDE BAR END -->
        <!-- SINGLE SIDE BAR START -->

    </div>
    <!-- SINGLE SIDE BAR END -->
</div>
@endsection
