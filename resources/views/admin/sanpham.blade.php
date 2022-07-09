<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">
<head>
    <title>Quan ly cho canh</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/assets/admin/css/styles.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</head> 

<body class="sb-nav-fixed">
    <!-- header -->
    @include('includes.header');
    <div id="layoutSidenav">
        <!-- sidebar -->
        @include('includes.sidebar');
        
        <div id="layoutSidenav_content" >
            <main>
                <div class="container-fluid px-4">

                    <h1 class="mt-4"  >Quản Lý Chó Cảnh</h1>
                    <hr size="1px">
                    <p><button style=" margin-left:85%" class="btn btn-primary" ng-click="showmodal(0)"><i class="fa fa-plus"> Add new product</i></button></p>                           
                    <div class="col-xs-4" style="width: 120px;height:60px;margin-bottom:20px ">
                        <label for="search" >items per page:</label>
                        <input type="number" style="width: 50px;" min="1" max="100" class="form-control" ng-model="itemPerPage">
                    
                    </div>
                    <div class="card mb-4" >
                   
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Danh sách chó cảnh
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>TT</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <!-- <th>Dòng sản phẩm</th>
                                    <th>Nhà cung cấp</th> -->
                                    <th style="text-align: right;">Giá</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr dir-paginate="sp in products|filter: timkiem |itemsPerPage:itemPerPage">
                                    <td>@{{$index+serial}}</td>
                                    <td><img src="/image/cho_canh/@{{sp.anh}}" style='width:150px' alt=""></td>
                                    <td>@{{sp.name_dog}}</td>
                                    <!-- <td>@{{sp.ten_dong}}</td>
                                    <td>@{{sp.ten_ncc}}</td> -->
                                    <td align="right">@{{sp.gia_ban |number:0}}</td>
                                    <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(sp.id)">&nbsp;</button></td>
                                    <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(sp.id)">&nbsp;</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                        
                            <dir-pagination-controls   max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                                
                            </dir-pagination-controls> 

                        </div>
                    </div>
                </div>
            </main>
       
    
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">@{{modalTitle}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm:</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.name_dog">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Đơn giá</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.gia_ban">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Ảnh</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.anh">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Màu sắc</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mau_sac">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Giới tính</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.gioi_tinh">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Tuổi</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.tuoi">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#exampleModal').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    // Use above variables to manipulate the DOM

                });
            </script>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="/js/angular.min.js"></script>
            <script src="/js/dirPagination.js"></script>
            <script src="/js/sanphamcontroller.js"> </script> 
            <!-- footer -->
            @include('includes.footer');
        </div>
    </div>
</body>
</html>