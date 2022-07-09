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

<body ng-app="myapp" ng-controller="sanphamcontroller">
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



<!-- Product Section Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="home"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Pot Party! See Farrah Abraham Flaunt Smoking Body At...</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a>
                            </h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="image/thong_tin/cho-alaska-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Top những giống chó đẹp, thông minh nhất</a></h6>
                            <!-- <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Mar 17, 2022</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Load more posts</a>
                </div>
            </div>
        </div>
    </section>




<!-- Services Section Begin -->

<!-- Services Section End -->

<!-- Instagram Begin -->
<!-- <div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Instagram End -->

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
<script src="/js/sanphamcontroller.js"> </script> 
</body>

</html>