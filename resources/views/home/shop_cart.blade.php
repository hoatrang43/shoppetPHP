<!DOCTYPE html>
<html lang="zxx" ng-app="cartapp" ng-controller="mycontroller">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Petty Shop">
    <link rel="icon" type="image/png" href="assets/home/img/logo1.png">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petty Shop | Shopping Cart</title>

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
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="sp in cart track by $index">
                                    <td class="cart__product__item">
                                        <img src="/image/cho_canh/@{{sp.image}}" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>@{{sp.name}}</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">@{{sp.unit_price|number:0}} đ</td>
                                    <td class="cart__quantity">
                                    <div class="input-group mb-3">
                                            <div ng-click="Giam(sp)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;">-</div>               
                                            <input type="text" value="@{{sp.quantity}}"  style="width: 50px; text-align: center; font-size: 15px; font-weight: 400; height: 40px;">
                                            <div ng-click="Tang(sp)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;">+</div>
                                        </div>
                                    </td>
                                    <td class="cart__total">@{{sp.quantity * sp.unit_price | number : 0}} đ</td>
                                    <td class="cart__close"><span class="icon_close" ng-click="Xoa(sp)"></span></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="home">Tiếp tục mua sắm</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="#"><span class="icon_loading" ng-click="XoaCart()"></span> Xoá toàn bộ</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <!-- <h6>Cart total</h6> -->
                        <ul>
                            <li>Tạm tính <span>@{{total |number : 0 }} đ</span></li>
                            <li>Tổng tiền <span>@{{total |number : 0 }} đ</span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">Mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->


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
<script src="/js/cart.js"> </script> 
</body>

</html>