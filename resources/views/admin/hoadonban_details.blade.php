<!doctype html>
<html class="no-js" lang="en" ng-app="myapp" ng-controller="hoadonbancontroller">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petty Shop</title>
    <link rel="icon" type="image/png" href="assets/home/img/logo1.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/home/img/logo1.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/assets/admin/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/admin/css/main.css">
    <link rel="stylesheet" href="/pagination/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/admin/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/assets/admin/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/admin/css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="/assets/admin/css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/admin/style.css">
    <!-- Modernize js -->
    <script src="/assets/admin/js/modernizr-3.6.0.min.js"></script>
</head>
<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
       @include('includes.header')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('includes.sidebar')

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Hoá đơn bán hàng</h3>
                    <ul>
                        <li>
                            <a href="products">Home</a>
                        </li>
                        <li>Chi tiết đơn hàng</li>
                    </ul>
                    
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="single-info-details">
                            
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h5 class="text-dark-medium font-medium" style="text-transform:capitalize">Thông tin khách hàng</h5>
                                    <div class="header-elements">
                                        <ul>
                                            <!-- <li><button class="btn btn-info fa fa-pen" style="height:35px; width:35px;" ng-click="showmodal(sp.id)">&nbsp;</button></li> -->
                                            <li><a href="hdbans"><i class="fas fa-arrow-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Họ tên:</td>
                                                <td class="font-medium text-dark-medium" style="text-transform:capitalize">@{{hdban.ten_ng_nhan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Số điện thoại:</td>
                                                <td class="font-medium text-dark-medium">@{{hdban.sdt_nhan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Địa chỉ nhận hàng:</td>
                                                <td class="font-medium text-dark-medium">@{{hdban.dia_chi_nhan_hang}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ngày đặt:</td>
                                                <td class="font-medium text-dark-medium">@{{hdban.date_order}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    
                    <div class="card-body">
                    
                        <div class="table-responsive">
                    
                            <table class="table table-border text-nowrap">
                                <thead>
                                    <tr>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                   
                                <tr ng-repeat="sp in CTHDBan">
                                    <td class="cart__product__item" style="overflow: hidden;width: 585px;">
                                        <img style="float: left;margin-right: 25px;width: 90px;" src="/image/cho_canh/@{{sp.anh}}" alt="">
                                        <div class="cart__product__item__title" style="overflow: hidden;padding-top: 23px;">
                                            <h6 style="text-transform:capitalize">@{{sp.name_dog}}</h6>
                                        </div>
                                    </td>
                                    <td style="overflow: hidden;padding-top: 23px;" class="cart__price">@{{sp.gia_ban|number:0}} đ</td>
                                    <td style="overflow: hidden;padding-top: 23px;text-align:center" class="cart__quantity">@{{sp.sl_dog}}</td>
                                    <td style="overflow: hidden;padding-top: 23px;" class="cart__total">@{{sp.sl_dog * sp.gia_ban | number : 0}} đ</td>
                                </tr>                               
                                </tbody>
                            </table>
                            <div style="font-size: 30px;border-top: 1px solid #ddd; color: black; padding-top: 20px ">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    Tổng tiền
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="">
                                <span style="float:right">@{{total |number : 0 }} đ</span>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
                <!-- Student Details Area End Here -->
            <!-- Modal -->

            
               <!-- Footer -->
               @include('includes.footer')

            </div>
        </div>
        <!-- Page Area End Here -->
    </div>

    <script src="/assets/admin/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/assets/admin/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/assets/admin/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/assets/admin/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/assets/admin/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/assets/admin/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/assets/admin/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="/js/angular.min.js"></script>
    <script src="/js/dirPagination.js"></script>
    <script src="/js/hoadonbancontroller.js"> </script>
 
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });</script>
</body>
</html>