var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('sanphamcontroller', function($scope, $http) { //tao 1 controller
    const id = localStorage.getItem('chosenId');
    $scope.openDetail = (id) => {
        // console.log(sp);
        localStorage.setItem('chosenId', id);
    }
    $scope.openDetails = (sp) => {
        console.log(sp);
        localStorage.setItem('chosenId', sp.id);
        localStorage.setItem('giongcho', sp.id_giong);
        // window.open('/detail');
        //location.href = 'dogdetails'
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/giongs"
    }).then(function(response) {
        console.log(response.data);
        $scope.giongs = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/categories"
    }).then(function(response) {
        console.log(response.data);
        $scope.categories = response.data;
    });

    $http({
        method: "get",
        url: "http://localhost:8000/api/products/" + id,
        params: {
            ProductName: localStorage.getItem("ten_giong")
        }
    }).then(function(response) {
        $scope.product = response.data;
        console.log(response.data);
    }, err => console.log(err));
    
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=12;

    $scope.indexCount = function(newPageNumber){

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $scope.sort = function(keyname){
        $scope.sortBy = keyname; //the sort column name
        $scope.reverse =!$scope.reverse;// ASC/DESC sorting
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });
$scope.itemPerPage1=4;

    $http({
        method: "GET",
        url: "http://localhost:8000/api/chocanh/listSPBanChay",
    }).then(function(d) {
        $scope.product1 = d.data;
        console.log($scope.product1);
    }, err => console.log(err));

    $http({
        method: "GET",
        url: "http://localhost:8000/api/chocanh/listSPMoi",
    }).then(function(d) {
        $scope.product2 = d.data;
        console.log($scope.product2);
    }, err => console.log(err));

    $http({
        method: "GET",
        url: "http://localhost:8000/api/chocanh/listPKMoi",
    }).then(function(d) {
        $scope.product3 = d.data;
        console.log($scope.product3);
    }, err => console.log(err));
    
    

    $http({
        method: "get",
        url: "http://localhost:8000/api/chocanh/TTGiong/" + localStorage.getItem("giongcho"),
        params: {
            CatID: localStorage.getItem("id_giong")
        }
        
    }).then(function(response) {
        $scope.TTGiong = response.data;
        console.log(response.data);
    }, err => console.log(err));
    
    // $http({
    //     method: "get",
    //     url: "http://localhost:8000/api/products/TTGiong1/" + id,
    //     params: {
    //         CatID: localStorage.getItem("id_giong")
    //     }
        
    // }).then(function(response) {
    //     $scope.TTGiong1 = response.data;
    //     console.log(response.data);
    // }, err => console.log(err));

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

    // lấy phụ kiện theo loại
    $scope.saveLoaiPK = function(phukienloai) {
        localStorage.setItem("phukienloai", phukienloai);
    }
    
    // $http({
    //     method: "get",
    //     url: "http://localhost:8000/api/phukien/shopdetail/" + localStorage.getItem("phukienloai")

    // }).then(function(d) {
    //     $scope.phukienloai = d.data;
    //     console.log($scope.dogLoai);
    // }, err => console.log(err));

    $scope.itemPerPagedogloai=6;
    $scope.itemPerPagel=8;
    $scope.itemPerPage3=9;
//thêm

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new dogs";
            if($scope.product){
                $scope.product.name_dog = "";
                $scope.product.gia_ban = "";
                $scope.product.id_giong = "";
                $scope.product.anh = "";
                $scope.product.anh_nho1 = "";
                $scope.product.anh_nho2 = "";
                $scope.product.anh_nho3 = "";
                $scope.product.gioi_tinh = "";
                $scope.product.mau_sac = "";
                $scope.product.tuoi = "";
                $scope.product.tiem_phong = "";
                $scope.product.tay_giun = "";
                $scope.product.nguon_goc = "";
                $scope.product.giay_to = "";
                $scope.product.sl = "";
            }
        } else {
            $scope.modalTitle = "Edit dog";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.product = response.data;
                $scope.product.id_giong=$scope.product.id_giong + '';
            });
        }
        $('#modelId').modal('show');
    }
    //xoá
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/products/" + id
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
                url: "http://localhost:8000/api/products",
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
                url: "http://localhost:8000/api/products/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.product.id_giong=$scope.id_giong;
                console.log(response.data);
                location.reload();

            });
        }
    }
    $scope.addToCart = function () {

        let item = {};
        item.id = $scope.product.id;
        item.name = $scope.product.name_dog;
        item.quantity = 1;
       
        item.unit_price = $scope.product.gia_ban;
        
        item.image = $scope.product.anh;

        // console.log(item);
        
        var list = JSON.parse(localStorage.getItem('cart')) || [];
            if (list.length === 0) {
                list = [item];
            } else {
                let ok = true;
                for (let x of list) {
                    if (x.id == item.id) {
                        x.quantity += item.quantity;
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
    };
    $scope.Sum = function()
    {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
        var s =0;
        if($scope.cart!=null)
        {
            $scope.cart.forEach(e => {
                s= s+ e.quantity;
            });
        }
        else
        {
            s = 0;
        }
        return s;
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