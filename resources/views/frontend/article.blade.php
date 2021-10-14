@extends('frontend.layout.main')

@section('main-content')
    <!-- Main Content-->
    <style>
        .card {
            height:450px;
            width:500px;
        }

        .card .card-img-top {
            height:300px;
            width:500px;
        }
    </style>
    <section class="news mb-4 mt-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="/frontend/index.html">Trang chủ</a>
                    <span><i class="fa fa-caret-right"></i></span>
                    <span>Tin tức</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin-left:25px;">
                @foreach($data as $item)
                <div class="col-6 col-md-6">
                    <div class="card mb-6">
                        <a href="{{ route('shop.detailArticle',['slug' =>$item->slug]) }}">
                        <img class="card-img-top" src="{{ asset($item->image) }}" style=" box-shadow: 2px 3px 10px #EBEBEB,-2px 3px 10px #EBEBEB;" alt="Card image cap">
                        </a>
                        <div class="card-body ">
                            <h4 style="height:20px; margin-top:10px; display: inline-block; color: black; font-size: 18px;line-height: 27px; front-weight:bold;" class="card-title">
                                <a href="{{ route('shop.detailArticle',['slug' =>$item->slug]) }}">
                                    {{ $item->title }}
                                </a>
                            </h4>
                                    <p >{!! $item->summary !!}</p>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                @endforeach

            </div>
            </div>

    </section>
    <!-- END -->
@endsection
