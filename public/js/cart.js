var app = angular.module('cartapp', []);
app.controller('mycontroller', function ($scope, $http) {
    $scope.LoadCart = function () {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
    }
    $scope.LoadCart();
    $scope.Sum = function()
    {
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
    $scope.Tang = function (sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0) {
            $scope.cart[index].quantity += 1;
        }
        reCaculatioTotalPrice ()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }

    $scope.total = 0;
    function reCaculatioTotalPrice () {
        if ($scope.cart == null) {
            $scope.cart = [];
        }
        let total = 0;
        $scope.cart.forEach(e => {
            total += e.unit_price * e.quantity
        });
        $scope.total = total;
    }
    reCaculatioTotalPrice ()

    $scope.Giam = function (sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0 && $scope.cart[index].quantity >= 2) {
            $scope.cart[index].quantity -= 1;
        }
        reCaculatioTotalPrice ()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }

    $scope.Xoa = function (sp) {
        var index = $scope.cart.indexOf(sp);
        $scope.cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify($scope.cart));
        reCaculatioTotalPrice ()

        alert("Đã xóa sản phẩm thành công");
    }

    $scope.XoaCart = function () {
        localStorage.setItem('cart', null);
        location.reload();
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

    $scope.saveLoai = function(dogloai) {
        localStorage.setItem("dogloai", dogloai);
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