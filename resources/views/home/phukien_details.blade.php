<!DOCTYPE html>
<html lang="zxx" >

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Petty Shop">
    <link rel="icon" type="image/png" href="assets/home/img/logo1.png">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petty Shop | @{{product.name_dog}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/home/css/style.css" type="text/css">
</head>

<body ng-app="myapp" ng-controller="phukiencontroller">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="home"><img src="assets/home/img/logo1.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Đăng nhập</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('home_includes.header')
    <!-- Header Section End -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="home"><i class="fa fa-home"></i> Home</a>
                        <a href="shopdog">Phụ kiện</a>
                        <span>@{{product.ten_pk}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="/image/phu_kien/@{{product.anh}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="/image/phu_kien/@{{product.anh_nho1}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="/image/phu_kien/@{{product.anh_nho2}}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="/image/phu_kien/@{{product.anh_nho3}}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="/image/phu_kien/@{{product.anh}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="/image/phu_kien/@{{product.anh_nho1}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="/image/phu_kien/@{{product.anh_nho2}}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="/image/phu_kien/@{{product.anh_nho3}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>@{{product.ten_pk}}</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price">@{{product.gia_ban|number:0}} đ</div>
                        
                        <div class="product__details__button">
                            <!-- <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div> -->
                            <!-- <button  class="cart-btn" ng-click="addToCart()"><span class="icon_bag_alt"></span> Thêm vào giỏ hàng</button> -->
                            <a href="shop_cart" class="cart-btn" ng-click="addToCart()"><span class="icon_bag_alt"></span> Thêm vào giỏ hàng</a>
                            
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Xuất xứ:</span>
                                    <p>@{{product.xuat_xu}}</p>
                                </li>
                                <li>
                                    <span>Thương hiệu:</span>
                                    <p>@{{product.thuong_hieu}}</p>
                                </li>
                                <li>
                                    <span>Khối lượng:</span>
                                    <p>@{{product.khoi_luong}}</p>
                                </li>
                                <li>
                                    <span>Thông tin:</span>
                                    <p style="text-align: justify">@{{product.thong_tin}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Nguyên liệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Công dụng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Cách sử dụng</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Thành phần nguyên liệu</h6>
                                <p type="text">@{{product.thanh_phan_nguyen_lieu}}</p>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h6>Công dụng</h6>
                                <p>@{{product.cong_dung}}</p>
                                
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <h6>Cách sử dụng</h6>
                                <p>@{{product.cach_su_dung}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>SẢN PHẨM LIÊN QUAN</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"dir-paginate="sp in products|filter: timkiem |itemsPerPage:itemPerPagel">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/image/phu_kien/@{{sp.anh}}">
                            <!-- <div class="label new">New</div> -->
                            <ul class="product__hover">
                                <li><a href="/image/phu_kien/@{{sp.anh}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="phukien_details" ng-click="openDetails(sp.id)"><span class="icon_plus"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">@{{sp.ten_pk}}</a></h6>
                            
                            <div class="product__price">@{{sp.gia_ban |number:0}} đ</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->


<!-- Instagram Begin -->

<!-- Instagram End -->

<!-- Footer Section Begin -->
@include('home_includes.footer');
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="assets/home/js/jquery-3.3.1.min.js"></script>
<script src="assets/home/js/bootstrap.min.js"></script>
<script src="assets/home/js/jquery.magnific-popup.min.js"></script>
<script src="assets/home/js/jquery-ui.min.js"></script>
<script src="assets/home/js/mixitup.min.js"></script>
<script src="assets/home/js/jquery.countdown.min.js"></script>
<script src="assets/home/js/jquery.slicknav.js"></script>
<script src="assets/home/js/owl.carousel.min.js"></script>
<script src="assets/home/js/jquery.nicescroll.min.js"></script>
<script src="assets/home/js/main.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/dirPagination.js"></script>
<script src="/js/phukiencontroller.js"> </script> 
</body>

</html>