<!doctype html>
<html class="no-js" lang="en">
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
<body ng-app="myapp" ng-controller="phukiencontroller">
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
                    <h3>Phụ kiện</h3>
                    <ul>
                        <li>
                            <a href="products">Home</a>
                        </li>
                        <li>Thông tin chi tiết</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3 style="text-transform:capitalize">Về @{{product.ten_pk}}</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="products"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="/image/phu_kien/@{{product.anh}}" alt="photo">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">@{{product.ten_pk}}</h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><button class="btn btn-info fa fa-pen" style="height:35px; width:35px;" ng-click="showmodal(sp.id)">&nbsp;</button></li>
                                            <!-- <li><a href="#" ng-click="showmodal(sp.id)"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li> -->
                                            <li><a href="phukien"><i class="fas fa-arrow-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- <p style="text-align: justify">@{{product.giay_to}}</p> -->
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Tên sản phẩm:</td>
                                                <td class="font-medium text-dark-medium">@{{product.ten_pk}}</td>
                                            </tr>
                                            <tr>
                                                <td>Thuộc loại:</td>
                                                <td class="font-medium text-dark-medium">@{{product.loaiphukien.ten_loai}}</td>
                                            </tr>
                                            <tr>
                                                <td>Thương hiệu:</td>
                                                <td class="font-medium text-dark-medium">@{{product.thuong_hieu}}</td>
                                                <!-- <div><p>@{{product.thuong_hieu}}</p></div> -->
                                            </tr>
                                            <tr>
                                                <td>Xuất xứ:</td>
                                                <td class="font-medium text-dark-medium">@{{product.xuat_xu}}</td>
                                            </tr>
                                            <tr>
                                                <td>Chất liệu:</td>
                                                <td class="font-medium text-dark-medium">@{{product.chat_lieu}}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Thể tích:</td>
                                                <td class="font-medium text-dark-medium">@{{product.the_tich}}</td>
                                            </tr>
                                            <tr>
                                                <td>Khối lượng:</td>
                                                <td class="font-medium text-dark-medium">@{{product.khoi_luong}}</td>
                                            </tr>
                                            <tr>
                                                <td>Số lượng:</td>
                                                <td class="font-medium text-dark-medium">@{{product.sl}}</td>
                                            </tr>
                                            <tr>
                                                <td>Giá bán:</td>
                                                <td class="font-medium text-dark-medium">@{{product.gia_ban| number:0}} đ</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label>Thông tin</label>
                                        <div style="text-align: justify">@{{product.thong_tin}}</div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Thành phần nguyên liệu</label>
                                        <div style="text-align: justify">@{{product.thanh_phan_nguyen_lieu}}</div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Công dụng</label>
                                        <div style="text-align: justify">@{{product.cong_dung}}</div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Cách sử dụng</label>
                                        <div style="text-align: justify">@{{product.cach_su_dung}}</div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Details Area End Here -->
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="text-transform:capitalize">@{{modalTitle}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form class="new-added-form">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label>Tên phụ kiện</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.ten_pk">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Loại phụ kiện *</label>
                                    <select class="select2" ng-model='product.id_lpk'>
                                        <option ng-repeat="g in categories" value="@{{g.id}}">@{{g.ten_loai}}</option>
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Xuất xứ</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.xuat_xu">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Thương hiệu</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.thuong_hieu">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Chất liệu</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.chat_lieu">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Thể tích</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.the_tich">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Khối lượng</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.khoi_luong">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Số lượng</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.sl">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Giá bán</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.gia_ban">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Thông tin</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="product.thong_tin"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Thành phần nguyên liệu</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="product.thanh_phan_nguyen_lieu"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Công dụng</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="product.cong_dung"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Cách sử dụng</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="product.cach_su_dung"></textarea>
                                </div>
                                <div class="col-lg-12 col-12"><label>Upload Big Image</label></div>
                                <div class="col-lg-12 col-12 form-group mg-t-5">
                                    <input type="file" class="custom-file-input "  id="customFile" name="filename" ng-model="product.anh">
                                    <label style="height: 45px;" class="custom-file-label" class="form-control" id='img' for="customFile" >@{{product.anh}}</label>
                                </div>
                                <div class="col-lg-12 col-12"><label>Upload Small Image 1</label></div>
                                <div class="col-lg-12 col-12 form-group mg-t-5">
                                    <input type="file" class="custom-file-input "  id="customFile1" name="filename" ng-model="product.anh_nho1">
                                    <label style="height: 45px;" class="custom-file-label" class="form-control" id='img1' for="customFile1" >@{{product.anh_nho1}}</label>
                                </div>
                                <div class="col-lg-12 col-12"><label>Upload Small Image 2</label></div>
                                <div class="col-lg-12 col-12 form-group mg-t-5">
                                    <input type="file" class="custom-file-input "  id="customFile2" name="filename" ng-model="product.anh_nho2">
                                    <label style="height: 45px;" class="custom-file-label" class="form-control" id='img2' for="customFile2" >@{{product.anh_nho2}}</label>
                                </div>
                                <div class="col-lg-12 col-12"><label>Upload Small Image 3</label></div>
                                <div class="col-lg-12 col-12 form-group mg-t-5">
                                    <input type="file" class="custom-file-input "  id="customFile3" name="filename" ng-model="product.anh_nho3">
                                    <label style="height: 45px;" class="custom-file-label" class="form-control" id='img3' for="customFile3" >@{{product.anh_nho3}}</label>
                                </div>
                            </div>
                        </form>
                                
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#modelId').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    // Use above variables to manipulate the DOM

                });
            </script>
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
    <script src="/js/phukiencontroller.js"> </script>
 
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });</script>
</body>
</html>