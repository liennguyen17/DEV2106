@extends('frontend.layout.main')

@section('main-content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="/frontend/index.html">Trang chủ</a>
            <span><i class="fa fa-caret-right"></i></span>
            <span>nữ</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <!-- PRODUCT-LEFT-SIDEBAR START -->
        <div class="product-left-sidebar">
            <h2 class="left-title pro-g-page-title">mục lục</h2>
            <!-- SINGLE SIDEBAR ENABLED FILTERS START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">chi tiết:</span>
                <ul class="filtering-menu">
                    <li>
                        Kiểu mẫu: Áo dài
                        <a href="/frontend/#"><i class="fa fa-remove"></i></a>
                    </li>
                    <li>
                        Tình trạng : còn hàng
                        <a href="/frontend/#"><i class="fa fa-remove"></i></a>
                    </li>
                    <li>
                        số lượng :50
                        <a href="/frontend/#"><i class="fa fa-remove"></i></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR ENABLED FILTERS END -->
            <!-- SINGLE SIDEBAR CATEGORIES START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">kiểu mẫu</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="categories"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Áo<span> (12)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="categories"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Váy<span> (13)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR CATEGORIES END -->
            <!-- SINGLE SIDEBAR AVAILABILITY START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Xu hướng</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="availability"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Đồng hồ<span> (13)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR AVAILABILITY END -->
            <!-- SINGLE SIDEBAR CONDITION START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Hàng mới</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="condition"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Guốc<span> (13)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR CONDITION END -->
            <!-- SINGLE SIDEBAR MANUFACTURER START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">phong cách Thiết kế</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="manufacturer"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Fashion<span> (13)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR MANUFACTURER END -->
            <!-- SINGLE SIDEBAR PRICE START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Giá</span>
                <ul>
                    <li>
                        <label><strong>Mức giá:</strong><input type="text" id="slidevalue" /></label>
                    </li>
                    <li>
                        <div id="price-range"></div>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR PRICE END -->
            <!-- SINGLE SIDEBAR SIZE START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Size</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="Size"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">S<span> (10)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="Size"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">m<span> (10)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="Size"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">l<span> (10)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR SIZE END -->
            <!-- SINGLE SIDEBAR COLOR START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Màu sắc</span>
                <ul class="product-color-var">
                    <li>
                        <i class="fa fa-square color-beige"></i>
                        <a href="/frontend/#">Be<span> (1)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-white"></i>
                        <a href="/frontend/#">Trắng<span> (2)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-black"></i>
                        <a href="/frontend/#">Đen<span> (2)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-orange"></i>
                        <a href="/frontend/#">Cam<span> (5)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-blue"></i>
                        <a href="/frontend/#">Xanh<span> (8)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-green"></i>
                        <a href="/frontend/#">Xanh<span> (3)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-yellow"></i>
                        <a href="/frontend/#">Vàng<span> (4)</span></a>
                    </li>
                    <li>
                        <i class="fa fa-square color-pink"></i>
                        <a href="/frontend/#">Hồng<span> (6)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR COLOR END -->
            <!-- SINGLE SIDEBAR COMPOSITIONS START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Chất liệu</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="compositions"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Cotton<span>(8)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="compositions"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#"> Đã chọn<span>(3)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="compositions"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#"> Viscose<span>(2)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR COMPOSITIONS END -->
            <!-- SINGLE SIDEBAR STYLES START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">Phong cánh</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="styles"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Đơn giản<span>(5)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="styles"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Tinh tế<span>(1)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="styles"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Cuốn hút<span>(7)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR STYLES END -->
            <!-- SINGLE SIDEBAR PROPERTIES START -->
            <div class="product-single-sidebar">
                <span class="sidebar-title">lựa chọn</span>
                <ul>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="properties"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">váy<span>(4)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="properties"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Maxi váy<span>(1)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="properties"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Đầm<span>(2)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="properties"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Short Dress<span>(2)</span></a>
                    </li>
                    <li>
                        <label class="cheker">
                            <input type="checkbox" name="properties"/>
                            <span></span>
                        </label>
                        <a href="/frontend/#">Quần short<span>(4)</span></a>
                    </li>
                </ul>
            </div>
            <!-- SINGLE SIDEBAR PROPERTIES END -->
        </div>
        <!-- PRODUCT-LEFT-SIDEBAR END -->
        <!-- SINGLE SIDEBAR TAG START -->
        <div class="product-left-sidebar">
            <h2 class="left-title">Hots </h2>
            <div class="category-tag">
                <a href="/frontend/#">fashion</a>
                <a href="/frontend/#">Túi sách</a>
                <a href="/frontend/#">Nữ</a>
                <a href="/frontend/#">Nam</a>
                <a href="/frontend/#">Đầm</a>
                <a href="/frontend/#">Mới</a>
                <a href="/frontend/#">Set</a>
                <a href="/frontend/#">Giày</a>
                <a href="/frontend/#">Đồng hồ</a>
            </div>
        </div>
        <!-- SINGLE SIDEBAR TAG END -->
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="right-all-product">
            <!-- PRODUCT-CATEGORY-HEADER START -->
            <div class="product-category-header">
                <div class="category-header-image">
                    <img src="/frontend/img/category-header.jpg" alt="category-header" />
                    <div class="category-header-text">
                        <h2>Nữ </h2>
                        <strong>Bạn sẽ tìm thấy ở đây tất cả các bộ sưu tập thời trang phụ nữ</strong>
                        <p>Danh mục này bao gồm tất cả những điều cơ bản về tủ quần áo của bạn và hơn thế nữa<br /> giày dép, phụ kiện, áo thun in hình, váy nữ tính, quần jean nữ!</p>
                    </div>
                </div>
            </div>
            <!-- PRODUCT-CATEGORY-HEADER END -->
            <div class="product-category-title">
                <!-- PRODUCT-CATEGORY-TITLE START -->
                <h1>
                    <span class="cat-name">Nữ</span>
                    <span class="count-product">Có 133 sản phẩm</span>
                </h1>
                <!-- PRODUCT-CATEGORY-TITLE END -->
            </div>
            <div class="product-shooting-area">
                <div class="product-shooting-bar">
                    <!-- SHOORT-BY START -->
                    <div class="shoort-by">
                        <label for="productShort">Sắp xếp theo</label>
                        <div class="short-select-option">
                            <select name="sortby" id="productShort">
                                <option value="">--</option>
                                <option value="">Giá:thấp đầu tiên</option>
                                <option value="">Giá:cao đầu tiên</option>
                                <option value="">Tên sản phẩm: A to Z</option>
                                <option value="">Tên sản phẩm: Z to A</option>
                                <option value="">Còn hàng</option>
                                <option value="">tham chiếu:theo mẫu</option>
                                <option value="">tham chiếu:ngẫu nhiên</option>
                            </select>
                        </div>
                    </div>
                    <!-- SHOORT-BY END -->
                    <!-- SHOW-PAGE START -->
                    <div class="show-page">
                        <label for="perPage">Hiện</label>
                        <div class="s-page-select-option">
                            <select name="show" id="perPage">
                                <option value="">11</option>
                                <option value="">12</option>
                            </select>
                        </div>
                        <span>trang</span>
                    </div>
                    <!-- SHOW-PAGE END -->
                    <!-- VIEW-SYSTEAM START -->
                    <div class="view-systeam">
                        <label for="perPage">Kiểu:</label>
                        <ul>
                            <li class="active"><a href="/frontend/shop-gird.html"><i class="fa fa-th-large"></i></a><br />Lưới</li>
                            <li><a href="/frontend/shop-list.html"><i class="fa fa-th-list"></i></a><br />Danh sách</li>
                        </ul>
                    </div>
                    <!-- VIEW-SYSTEAM END -->
                </div>
                <!-- PRODUCT-SHOOTING-RESULT START -->
                <div class="product-shooting-result">
                    <form action="#">
                        <button class="btn compare-button">
                            Trang tiếp (<span class="compare-value">1</span>)
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </form>
                    <div class="showing-item">
                        <span>Hiển thị 1 - 12 trong 13 mục </span>
                    </div>
                    <div class="showing-next-prev">
                        <ul class="pagination-bar">
                            <li class="disabled">
                                <a href="/frontend/#" ><i class="fa fa-chevron-left"></i>Trước đó</a>
                            </li>
                            <li class="active">
                                <span><a class="pagi-num" href="/frontend/#">1</a></span>
                            </li>
                            <li>
                                <span><a class="pagi-num" href="/frontend/#">2</a></span>
                            </li>
                            <li>
                                <a href="/frontend/#" >Tiếp theo<i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>
                        <form action="#">
                            <button class="btn showall-button">Tất cả</button>
                        </form>
                    </div>
                </div>
                <!-- PRODUCT-SHOOTING-RESULT END -->
            </div>
        </div>
        <!-- ALL GATEGORY-PRODUCT START -->
        <div class="all-gategory-product">
            <div class="row">
                <ul class="gategory-product">
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/3.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Faded Short Sleeves T-shirt</a>
                                <div class="price-box">
                                    <span class="price">$16.51</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/1.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">sale!</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Blouse</a>
                                <div class="price-box">
                                    <span class="price">$22.95</span>
                                    <span class="old-price">$27.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/9.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">sale!</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Dress</a>
                                <div class="price-box">
                                    <span class="price">$23.40</span>
                                    <span class="old-price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/5.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>2 Review(s)</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Dress</a>
                                <div class="price-box">
                                    <span class="price">$50.99</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/12.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Summer Dress</a>
                                <div class="price-box">
                                    <span class="price">$28.98</span>
                                    <span class="old-price">$30.51</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/13.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Summer Dress </a>
                                <div class="price-box">
                                    <span class="price">$30.50</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/11.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Dress</a>
                                <div class="price-box">
                                    <span class="price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/2.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Blouse</a>
                                <div class="price-box">
                                    <span class="price">$27.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/4.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Faded Short Sleeves T-shirt</a>
                                <div class="price-box">
                                    <span class="price">$16.51</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/7.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Chiffon Dress </a>
                                <div class="price-box">
                                    <span class="price">$16.40</span>
                                    <span class="old-price">$20.50</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/9.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">sale!</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Dress</a>
                                <div class="price-box">
                                    <span class="price">$23.40</span>
                                    <span class="old-price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/10.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Dress</a>
                                <div class="price-box">
                                    <span class="price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/6.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Chiffon Dress </a>
                                <div class="price-box">
                                    <span class="price">$16.40</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/3.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">new</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Faded Short Sleeves T-shirt</a>
                                <div class="price-box">
                                    <span class="price">$16.51</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/1.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">sale!</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Blouse</a>
                                <div class="price-box">
                                    <span class="price">$22.95</span>
                                    <span class="old-price">$27.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                    <!-- SINGLE ITEM START -->
                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/frontend/single-product.html"><img src="/frontend/img/product/sale/9.jpg" alt="product-image" /></a>
                                <a href="/frontend/single-product.html" class="new-mark-box">sale!</a>
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
                                <div class="customar-comments-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="review-box">
                                        <span>Đánh giá</span>
                                    </div>
                                </div>
                                <a href="/frontend/single-product.html">Printed Dress</a>
                                <div class="price-box">
                                    <span class="price">$23.40</span>
                                    <span class="old-price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE ITEM END -->
                </ul>
            </div>
        </div>
        <!-- ALL GATEGORY-PRODUCT END -->
        <!-- PRODUCT-SHOOTING-RESULT START -->
        <div class="product-shooting-result product-shooting-result-border">
            <form action="#">
                <button class="btn compare-button">
                    Trang tiếp (<strong class="compare-value">1</strong>)
                    <i class="fa fa-chevron-right"></i>
                </button>
            </form>
            <div class="showing-item">
                <span>Hiển thị 1 - 12 trong 13 trang</span>
            </div>
            <div class="showing-next-prev">
                <ul class="pagination-bar">
                    <li class="disabled">
                        <a href="/frontend/#" ><i class="fa fa-chevron-left"></i>Trước đó</a>
                    </li>
                    <li class="active">
                        <span><a class="pagi-num" href="/frontend/#">1</a></span>
                    </li>
                    <li>
                        <span><a class="pagi-num" href="/frontend/#">2</a></span>
                    </li>
                    <li>
                        <a href="/frontend/#" >sau đó<i class="fa fa-chevron-right"></i></a>
                    </li>
                </ul>
                <form action="#">
                    <button class="btn showall-button">Tất cả</button>
                </form>
            </div>
        </div>
        <!-- PRODUCT-SHOOTING-RESULT END -->
    </div>
</div>
@endsection
