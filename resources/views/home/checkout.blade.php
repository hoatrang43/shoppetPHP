<!DOCTYPE html>
<html lang="zxx" >

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Petty Shop">
    <link rel="icon" type="image/png" href="assets/home/img/logo1.png">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petty Shop</title>

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

<body ng-app="myapp" ng-controller="checkoutcontroller">
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
        <ul>
                                <li><a href="login" ng-model="dangnhap">@{{dangnhap}}</a>
                                <ul class="dropdown" ng-show="test">
                                <li><a href="#" ng-click="dangxuat()">Logout</a></li>
                                    
                                </ul>
                                </li>
                            </ul>
            <!-- <a href="#">Đăng nhập</a>
            <a href="#">Register</a> -->
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('home_includes.header')
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="home"><i class="fa fa-home"></i> Home</a>
                        <span>Đặt hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                    here to enter your code.</h6>
                </div>
            </div>
            <div class="checkout__form">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Chi tiết hoá đơn</h5>
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Họ tên <span>*</span></p>
                                    <input type="text"  style="text-transform:capitalize" ng-model="customer.ten_kh">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Địa chỉ nhận hàng <span>*</span></p>
                                    <input type="text" placeholder="Street Address" ng-model="customer.dia_chi">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Số điện thoại <span>*</span></p>
                                    <input type="text" ng-model="customer.sdt">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" ng-model="customer.email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="checkout__order">
                                <h5>Đơn hàng của bạn</h5>
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>
                                            <span class="top__text">Sản phẩm</span>
                                            <span class="top__text__right">Thành tiền</span>
                                        </li>
                                        <li ng-repeat="sp in cart track by $index" style="text-transform:capitalize">@{{sp.quantity}} @{{sp.name}} <span>@{{sp.unit_price|number:0}} đ</span></li>
                                        
                                    </ul>
                                </div>
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Tạm tính <span>@{{total |number : 0 }} đ</span></li>
                                        <li>Tổng tiền <span>@{{total |number : 0 }} đ</span></li>
                                    </ul>
                                </div>
                                <button ng-click="dathang()"  class="site-btn">Đặt hàng</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </section>
        <!-- Checkout Section End -->


<!-- Footer Section Begin -->
@include('home_includes.footer');
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-50 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" ng-model="timkiem" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

		
    <script>
                $('#modalLoginForm').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    // Use above variables to manipulate the DOM

                });
            </script> 

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
<script src="/js/checkout.js"> </script> 
</body>

</html>