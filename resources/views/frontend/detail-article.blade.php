@extends('frontend.layout.main')

@section('main-content')
    <style>
        .our-company h1  {
            max-width: 770px;
            margin: 0 auto;
            font-size:32px;
            line-height: 1.6;
            color:#000;
            text-transform: uppercase;
            letter-spacing: .5px;
            text-align: center;
        }
        .single-about-info strong {
            color: #333;
            margin: 0 0 8px;
            font-size: 25px;
            overflow: hidden;
        }
        .single-about-info p {
            font-size: 20px;
            line-height: 1.6;
            color: #666;
        }
        .single-about-info img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
<!-- MAIN-CONTENT-SECTION START -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="index.html">Trang chủ</a>
                    <span><i class="fa fa-caret-right	"></i></span>
                    <span>Tin tức</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2  class="page-title about-page-title">{{$article->title}}</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- SINGLE-ABOUT-INFO START -->
                <div class="single-about-info">
                    <div class="our-company" style="font-size:16px;" >
                        {!! $article->description !!}
                        </div>
                    </div>
                </div>
                <!-- SINGLE-ABOUT-INFO END -->


    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@endsection
