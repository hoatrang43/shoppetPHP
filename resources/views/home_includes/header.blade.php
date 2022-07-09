<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="home"><img src="assets/home/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="home">Trang chủ</a></li>
                            <li><a href="shopdog">Chó cảnh</a>
                                <ul class="dropdown">
                                    <li ng-repeat="g in giongs"><a ng-click="saveLoai(g.id)" href="shopdogdetail">Chó @{{g.ten_giong}}</a></li>
                                    <!-- <li><a href="./shop-cart.html">Chó Alaska</a></li>
                                    <li><a href="./checkout.html">Chó Poodle</a></li> -->
                                </ul>
                            </li>
                            <li><a href="shopphukien">Shop phụ kiện</a>
                                <ul class="dropdown">
                                    <li ng-repeat="l in categories"><a ng-click="saveLoaiPK(l.id)" href="shop_phukien_details">@{{l.ten_loai}}</a></li>
                                </ul>
                            </li>
                            <li><a href="blog">Tin tức</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                    
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <ul>
                                <li><a href="login" ng-model="dangnhap">@{{dangnhap}}</a>
                                <ul class="dropdown" ng-show="test">
                                <li><a href="#">Tài khoản của tôi</a></li>
                                <li><a href="#">Đơn mua</a></li>
                                <li><a href="#" ng-click="dangxuat()">Đăng xuất</a></li>
                                </ul>
                                </li>
                            </ul>
                            <!-- <a href="#">Đăng nhập</a>
                            <ul class="dropdown">
                                    <li><a href="#">Login</a></li>
                                    <li>...</li>
                                </ul>
                            <a href="#">Register</a> -->
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip"></div>
                            </a></li>
                            <li><a href="shop_cart"><span class="icon_bag_alt"></span>
                                <div class="tip">@{{Sum()}}</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>