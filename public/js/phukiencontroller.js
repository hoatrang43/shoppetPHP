var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('phukiencontroller', function($scope, $http) { //tao 1 controller
    const id = localStorage.getItem('chosenId');
    
    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }
    
    $http({
        method: "GET",
        url: "http://localhost:8000/api/categories"
    }).then(function(response) {
        console.log(response.data);
        $scope.categories = response.data;
    });

    $http({
        method: "get",
        url: "http://localhost:8000/api/phukien/" + id,
        params: {
            ProductName: localStorage.getItem("ten_loai")
        }
    }).then(function(response) {
        $scope.product = response.data;
        console.log(response.data);
    }, err => console.log(err));
    
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=12;
    $scope.itemPerPagel = 8;
    $scope.indexCount = function(newPageNumber){

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $scope.sort = function(keyname){
        $scope.sortBy = keyname; //the sort column name
        $scope.reverse =!$scope.reverse;// ASC/DESC sorting
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/phukien"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });
$scope.itemPerPage1=3;

    $http({
        method: "GET",
        url: "http://localhost:8000/api/phukien/listSPBanChay",
    }).then(function(d) {
        $scope.product1 = d.data;
        console.log($scope.product1);
    }, err => console.log(err));

    $http({
        method: "GET",
        url: "http://localhost:8000/api/phukien/listSPMoi",
    }).then(function(d) {
        $scope.product2 = d.data;
        console.log($scope.product2);
    }, err => console.log(err));

    $http({
        method: "GET",
        url: "http://localhost:8000/api/phukien/listPKMoi",
    }).then(function(d) {
        $scope.product3 = d.data;
        console.log($scope.product3);
    }, err => console.log(err));
    
    $http({
        method: "GET",
        url: "http://localhost:8000/api/giongs"
    }).then(function(response) {
        console.log(response.data);
        $scope.giongs = response.data;
    });

    //lấy chó theo giống
    $scope.saveLoai = function(dogloai) {
        localStorage.setItem("giongcho", dogloai);
    }
    $http({
        method: "get",
        url: "http://localhost:8000/api/chocanh/shopdogdetail/" + localStorage.getItem("giongcho")

    }).then(function(d) {
        $scope.dogLoai = d.data;
        console.log($scope.dogLoai);
    }, err => console.log(err));

    //lấy phụ kiện theo loại
    $scope.saveLoaiPK = function(phukienloai) {
        localStorage.setItem("phukienloai", phukienloai);
    }
    
    $http({
        method: "get",
        url: "http://localhost:8000/api/phukien/shop_phukien_details/" + localStorage.getItem("phukienloai")

    }).then(function(d) {
        $scope.phukienloai = d.data;
        console.log($scope.dogLoai);
    }, err => console.log(err));
    
    $scope.itemPerPagephukienloai=6;
    
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm phụ kiện mới";
            if($scope.product){
                $scope.product.ten_pk = "";
                $scope.product.gia_ban = "";
                $scope.product.id_lpk = "";
                $scope.product.anh = "";
                $scope.product.anh_nho1 = "";
                $scope.product.anh_nho2 = "";
                $scope.product.anh_nho3 = "";
                $scope.product.xuat_xu = "";
                $scope.product.thuong_hieu = "";
                $scope.product.chat_lieu = "";
                $scope.product.the_tich = "";
                $scope.product.khoi_luong = "";
                $scope.product.sl = "";
                $scope.product.thong_tin = "";
                $scope.product.thanh_phan_nguyen_lieu = "";
                $scope.product.cong_dung = "";
                $scope.product.cach_su_dung = "";
            }
        } else {
            $scope.modalTitle = "Sửa thông tin";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/phukien/" + id
            }).then(function(response) {
                $scope.product = response.data;
                $scope.product.id_lpk=$scope.product.id_lpk + '';
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/phukien/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $scope.product.anh=document.getElementById("img").innerHTML;
            $scope.product.anh_nho1=document.getElementById("img1").innerHTML;
            $scope.product.anh_nho2=document.getElementById("img2").innerHTML;
            $scope.product.anh_nho3=document.getElementById("img3").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/phukien",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $scope.product.anh=document.getElementById("img").innerHTML;
            $scope.product.anh_nho1=document.getElementById("img1").innerHTML;
            $scope.product.anh_nho2=document.getElementById("img2").innerHTML;
            $scope.product.anh_nho3=document.getElementById("img3").innerHTML;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/phukien/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.product.id_lpk=$scope.id_lpk;
                console.log(response.data);
                location.reload();

            });
        }
    }
    $scope.addToCart = function () {

        let item = {};
        item.id = $scope.product.id;
        item.name = $scope.product.ten_pk;
        item.quantity = 1;
       
        item.unit_price = $scope.product.gia_ban;
        
        item.image = $scope.product.anh;

        // console.log(item);
        
        var list;
        if (!localStorage.getItem('cart')) {
            list = [item];
        } else {
            list = JSON.parse(localStorage.getItem('cart')) || [];
            let ok = true;
            for (let x of list) {
                if (x.id == item.id) {
                    x.size = item.size;
                    ok = false;
                    break;
                }
            }
            if (ok) {
                list.push(item);
            }
        }
        localStorage.setItem('cart', JSON.stringify(list));
        alert("Đã thêm giỏ hàng thành công");
    }
    // đăng nhập
    $scope.test = false;
    $scope.kh = "";
    if (sessionStorage.getItem("kh") == null) {
        $scope.dangnhap = "Đăng Nhập";
    } else {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + sessionStorage.getItem("kh")
        }).then(function(response) {
            $scope.kh = response.data.user_name;
            console.log($scope.kh);
            $scope.dangnhap = $scope.kh;
            $scope.test = true;
        });
    }
    //Đăng xuất
    $scope.dangxuat = function() {
        sessionStorage.removeItem("kh");
        location.reload();
    }
});