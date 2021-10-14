@extends('frontend.layout.main')

@section('main-content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="/frontend/index.html">Trang chủ</a>
            <span><i class="fa fa-caret-right"></i>Danh mục sản phẩm</span>
            <span><i class="fa fa-caret-right"></i>{{$data['name']}}</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->
    </div>
</div>
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="right-all-product">
            <!-- PRODUCT-CATEGORY-HEADER START -->

            <!-- PRODUCT-CATEGORY-HEADER END -->
            <div class="product-category-title">
                <!-- PRODUCT-CATEGORY-TITLE START -->
                <h1>
                    <span  class="cat-name">{{$data['name']}}</span>
                    <span class="count-product"></span>
                </h1>
                <!-- PRODUCT-CATEGORY-TITLE END -->
            </div>


            </div>
        </div>
        <!-- ALL GATEGORY-PRODUCT START -->
        <div class="all-gategory-product">
            <div class="row">
                <ul class="gategory-product">
                    @foreach($data['products'] as $product)
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('shop.product',['slug' => $product->slug]) }}"><img style="height:396px;" src="{{ asset($product->image) }}" alt="product-image" /></a>
                                <div class="overlay-content">
                                    <ul>
                                        <li><a href="/frontend/#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="/frontend/#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="/frontend/#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="/frontend/#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('shop.product',['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                <div class="price-box">
                                    <span class="price">{{ number_format($product->sale,0,",",".") }}₫</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- ALL GATEGORY-PRODUCT END -->

        <!-- PRODUCT-SHOOTING-RESULT END -->
    </div>

</div>

@endsection
