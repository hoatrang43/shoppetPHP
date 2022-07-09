var app = angular.module('myapp', ['angularUtils.directives.dirPagination']);
app.controller("checkoutcontroller", function ($scope, $http, $rootScope) {


    $http({
        method: "GET",
        url: "http://localhost:8000/api/giongs"
    }).then(function (response) {
        console.log(response.data);
        $scope.giongs = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/categories"
    }).then(function (response) {
        console.log(response.data);
        $scope.categories = response.data;
    });

    //lấy chó theo giống
    $scope.saveLoai = function (dogloai) {
        localStorage.setItem("giongcho", dogloai);
    }
    $http({
        method: "get",
        url: "http://localhost:8000/api/chocanh/shopdogdetail/" + localStorage.getItem("giongcho")

    }).then(function (d) {
        $scope.dogLoai = d.data;
        console.log($scope.dogLoai);
    }, err => console.log(err));

    //lấy phụ kiện theo loại
    $scope.saveLoaiPK = function (phukienloai) {
        localStorage.setItem("phukienloai", phukienloai);
    }

    $http({
        method: "get",
        url: "http://localhost:8000/api/phukien/shop_phukien_details/" + localStorage.getItem("phukienloai")

    }).then(function (d) {
        $scope.phukienloai = d.data;
        console.log($scope.dogLoai);
    }, err => console.log(err));


    $scope.test = false;
    $scope.kh = "";
    if (sessionStorage.getItem("kh") == null) {
        $scope.dangnhap = "Đăng Nhập";
    } else {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + sessionStorage.getItem("kh")
        }).then(function (response) {
            $scope.kh = response.data;
            console.log($scope.kh);
            $scope.dangnhap = $scope.kh.user_name;
            $scope.test = true;
        });
    }
    $scope.LoadCart = function () {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
        if ($scope.cart == null)
            $scope.cart = [];
    }
    $scope.LoadCart();
    $scope.total1 = 0;
    function reCaculatioTotalPrice() {
        let total1 = 0;
        $scope.cart.forEach(e => {
            total1 += e.unit_price * e.quantity
        });
        $scope.total = total1;
    }
    reCaculatioTotalPrice();

    //đặt hàng
    //đặt hàng
    $rootScope.customer = null;
    $scope.id = JSON.parse(sessionStorage.getItem("kh"));

    // lấy thông tin khách hàng
    if ($scope.id) {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + $scope.id
        }).then(function (response) {
            $scope.customer = response.data;
            // console.log($scope.customer);
        }, err => console.log(err));
    }
    $scope.Sum = function () {
        var s = 0;
        if ($scope.cart != null) {
            $scope.cart.forEach(e => {
                s = s + e.quantity;
            });
        }
        else {
            s = 0;
        }
        return s;
    }
    // $scope.dathang = () => {
    $scope.dathang = function() {
        const order = {
            id_kh: $scope.id,
            tong_tien: $scope.total,
            ten_ng_nhan: $scope.customer.ten_kh,
            sdt_nhan: $scope.customer.sdt,
            dia_chi_nhan_hang: $scope.customer.dia_chi,
            details: $scope.cart
        };
        $http({
            method: "POST",
            url: "http://localhost:8000/api/hdbans/",
            data: order
        }).then(res => {
            localStorage.removeItem('cart');
            alert("Đặt hàng thành công");
            location.href = "/home";
        }, err => console.log(err));
    }
});