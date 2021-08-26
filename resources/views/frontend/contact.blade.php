@extends('frontend.layout.main')

@section('main-content')
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="/frontend/index.html">Trang chủ</a>
            <span><i class="fa fa-caret-right	"></i></span>
            <span>Liên hệ</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->
    </div>
</div>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="page-title contant-page-title">DỊCH VỤ KHÁCH HÀNG - LIÊN HỆ VỚI CHÚNG TÔI</h2>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- CONTACT-US-FORM START -->
        <div class="contact-us-form">
            <div class="contact-form-center">
                <h3 class="contact-subheading">Mô tả</h3>
                <!-- CONTACT-FORM START -->
                <form class="contact-form" id="contactForm" method="post" action="#">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="form-group primary-form-group">
                                <label>Lựa chọn</label>
                                <div class="con-form-select">
                                    <select id="conForm" name="conform">
                                        <option value="">Dịch vụ khách hàng</option>
                                        <option value="">Quản trị trang web</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group primary-form-group">
                                <label>Email</label>
                                <input type="text" class="form-control input-feild" id="contactEmail" name="contactemail" value="">
                            </div>
                            <div class="form-group primary-form-group">
                                <label>Đơn hàng đã chọn</label>
                                <div class="con-form-select">
                                    <select id="orderRef" name="orderref">
                                        <option value="">Bootexpert</option>
                                        <option value="">Ohter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group primary-form-group">
                                <div class="file-uploader">
                                    <label>Thêm ảnh</label>
                                    <input type="file" class="form-control" name="fileUpload">
                                    <span class="filename">Chọn ảnh</span>
                                    <span class="action">chọn file</span>
                                </div>
                            </div>
                            <button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Gửi <i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="type-of-text">
                                <div class="form-group primary-form-group">
                                    <label>Lời nhắn</label>
                                    <textarea class="contact-text" name="ContactMessage"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- CONTACT-FORM END -->
            </div>
        </div>
        <!-- CONTACT-US-FORM END -->
    </div>
</div>
@endsection
