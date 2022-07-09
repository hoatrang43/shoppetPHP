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
<body ng-app="myapp" ng-controller="giongchocontroller">
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
                    <h3>Giống chó cảnh</h3>
                    <ul>
                        <li>
                            <a href="giongs">Home</a>
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
                                <h3 style="text-transform:capitalize">Về @{{giong.ten_giong}}</h3>
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
                                <img src="/image/thong_tin/@{{giong.anh}}" alt="dog">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">@{{giong.ten_giong}}</h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><button class="btn btn-info fa fa-pen" style="height:35px; width:35px;" ng-click="showmodal(sp.id)">&nbsp;</button></li>
                                    
                                            <li><a href="giongs"><i class="fas fa-arrow-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="info-table table-responsive">
                                <p style="text-align: justify">@{{giong.thong_tin}}</p>
                                <p style="text-align: justify">@{{giong.dac_diem}}</p>
                                    
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
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Tên giống chó cảnh</label>
                                    <input type="text" placeholder="" class="form-control" ng-model="giong.ten_giong">
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    
                                    <input type="file" class="custom-file-input"  id="customFile" name="filename" ng-model="giong.anh">
                                    <label style="height: 45px; top: 10px" class="custom-file-label" class="form-control" id='img' for="customFile" >@{{giong.anh}}</label>
                                </div>
                                <div class="col-lg-12 col-12 form-group" style="top: 20px">
                                    <label>Thông tin</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="giong.thong_tin"></textarea>
                                </div>
                                <div class="col-lg-12 col-12 form-group">
                                    <label>Đặc điểm</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9" ng-model="giong.dac_diem"></textarea>
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
    <script src="/js/giongchocontroller.js"> </script>
 
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });</script>
</body>
</html>