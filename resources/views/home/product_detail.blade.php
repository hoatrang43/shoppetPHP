<!DOCTYPE html>
<html lang="zxx"  ng-app="myapp" ng-controller="sanphamcontroller">

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

<body>
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
                        <a href="shopdog">Chó cảnh</a>
                        <span style="text-transform:capitalize">@{{product.name_dog}}</span>
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
                                <img src="/image/cho_canh/@{{product.anh}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="/image/cho_canh/@{{product.anh_nho1}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="/image/cho_canh/@{{product.anh_nho2}}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="/image/cho_canh/@{{product.anh_nho3}}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="/image/cho_canh/@{{product.anh}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="/image/cho_canh/@{{product.anh_nho1}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="/image/cho_canh/@{{product.anh_nho2}}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="/image/cho_canh/@{{product.anh_nho3}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>@{{product.name_dog}}</h3>
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
                            <a href="" class="cart-btn" ng-click="addToCart()"><span class="icon_bag_alt"></span> Thêm vào giỏ hàng</a>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Giới tính:</span>
                                    <p>@{{product.gioi_tinh}}</p>
                                </li>
                                <li>
                                    <span>Màu lông:</span>
                                    <p>@{{product.mau_sac}}</p>
                                </li>
                                <li>
                                    <span>Tuổi:</span>
                                    <p>@{{product.tuoi}}</p>
                                </li>
                                <li>
                                    <span>Nguồn gốc:</span>
                                    <p>@{{product.nguon_goc}}</p>
                                </li>
                                <li>
                                    <span>Giấy tờ:</span>
                                    <p>@{{product.giay_to}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>SẢN PHẨM LIÊN QUAN</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"dir-paginate="sp in dogLoai|filter: timkiem |itemsPerPage:itemPerPagel">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/image/cho_canh/@{{sp.anh}}">
                            <!-- <div class="label new">New</div> -->
                            <ul class="product__hover">
                                <li><a href="/image/cho_canh/@{{sp.anh}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="product_detail" ng-click="openDetails(sp.id)"><span class="icon_plus"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="product_detail" ng-click="openDetails(sp.id)" style="text-transform:capitalize">@{{sp.name_dog}}</a></h6>
                            
                            <div class="product__price">@{{sp.gia_ban |number:0}} đ</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <div class="pagination justify-content-center">
                            
                                    <dir-pagination-controls max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                                        
                                    </dir-pagination-controls> 

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
<script src="/js/sanphamcontroller.js"> </script> 
</body>

</html>