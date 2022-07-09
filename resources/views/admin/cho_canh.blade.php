<!doctype html>
<html class="no-js" lang="en" ng-app="myapp" ng-controller="sanphamcontroller">
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
                <div class="breadcrumbs-area">
                    <h2>Quản Lý Chó Cảnh</h2> 
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>Danh sách chó cảnh</li>
                    </ul>                 
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Product Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                        <div class="item-title">
                                <h3 >Danh sách chó cảnh</h3>                               
                            </div>
                            
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-4 col-12 form-group" style="top:7px;">
                                    <label for="search" style="float:left; margin-right:10px;" >items per page:</label>
                                    <input type="number" style="width: 70px;height:35px " min="1" max="100" class="form-control" ng-model="itemPerPage">

                                </div> 
                                <div class="col-4-xxxl col-xl-3 col-lg-4 col-12 form-group" >
                                    <input type="text" ng-model="timkiem"  placeholder="Nhập tên cần tìm ..."  class="form-control">
                                    
                                </div>
                                <div class="col-1-xxxl col-xl-3 col-lg-4 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow"ng-click="showmodal(0)" style="width: 120px; height:40px"><i class="fa fa-plus"> ADD NEW</i></button>
                                </div>
                            </div>
                        </form>
                      
                        <div class="table-responsive">
                            <table class="table table-border text-nowrap">
                                <thead>
                                    <tr>
                                    <th>TT</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Giống</th>
                                    <th>Tuổi</th>
                                    <th>Giá</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                          
                                    <tr dir-paginate="sp in products|filter: timkiem |itemsPerPage:itemPerPage">
                                        <td>@{{$index+serial}}</td>
                                        <td><a href="dogdetails" ng-click="openDetails(sp)"><img src="/image/cho_canh/@{{sp.anh}}" style='width:100%' alt=""></a></td>
                                        <td><a href="dogdetails" ng-click="openDetails(sp)" style="color: #646464; text-transform:capitalize">@{{sp.name_dog}}</a></td>
                                        <td>@{{sp.giongcho.ten_giong}}</td>
                                        <td>@{{sp.tuoi}}</td>
                                        <td >@{{sp.gia_ban |number:0}} đ</td>
                                        <td><button class="btn btn-info fa fa-pen" style="height:30px; width:30px;" ng-click="showmodal(sp.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" style="height:30px; width:30px" ng-click="deleteClick(sp.id)">&nbsp;</button></td>
                                        
                                    </tr>                                  
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center">
                        
                                <dir-pagination-controls max-size="12" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                                    
                                </dir-pagination-controls> 

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Product Table Area End Here -->
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
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Tên chó cảnh</label>
                                    <input type="text" placeholder="" class="form-control" style="text-transform:capitalize" ng-model="product.name_dog">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Giống chó cảnh *</label>
                                    <select class="select2" ng-model='product.id_giong'>
                                        <option ng-repeat="g in giongs" value="@{{g.id}}">@{{g.ten_giong}}</option>
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Giới tính</label>
                                    <input type="text" style="text-transform:capitalize" placeholder="" class="form-control" ng-model="product.gioi_tinh">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Màu lông</label>
                                    <input type="text" style="text-transform:capitalize" placeholder="" class="form-control" ng-model="product.mau_sac">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Tuổi</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.tuoi">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Số lượng</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.sl">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Số lần tẩy giun</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.tay_giun">
                                </div>
                                <div class=" col-lg-6 col-12 form-group">
                                    <label>Tiêm phòng</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.tiem_phong">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Giá bán</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="product.gia_ban">
                                    
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Nguồn gốc</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="product.nguon_goc"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Giấy tờ đi kèm</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="product.giay_to"></textarea>
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
    <script src="/js/sanphamcontroller.js"> </script>
 
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });</script>
      <!-- <script> $("#customFile1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#img1").addClass("selected").html(fileName);
      });</script>
      <script> $("#customFile2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#img2").addClass("selected").html(fileName);
      });</script>
      <script> $("#customFile3").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#img3").addClass("selected").html(fileName);
      });</script> -->
</body>
</html>