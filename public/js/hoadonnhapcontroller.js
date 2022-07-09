var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('hoadonnhapcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.itemPerPage = 10;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber) {

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    const id = localStorage.getItem('chosenId');
    $scope.openDetails = (id) => {
        localStorage.setItem('chosenId', id);
    }
    //Lấy chi tiết hóa đơn

    $scope.Billsdetail = function(idhd) {
        localStorage.setItem("id", idhd);
    }

    $scope.saveKH = function(id) {
        localStorage.setItem("khach", id);
    }
    
    $scope.saveOrderToLocal = (idhd)=>{
        $scope.Billsdetail(idhd);
        $scope.openDetails(idhd);
        location.href = 'hoadonnhap_details';
    } 

    

    $http({
        method: "get",
        url: "http://localhost:8000/api/billsnhap/LayCTHDNhap/" + localStorage.getItem('id'),
        params: {
            MaHD: localStorage.getItem("id_bill_nhap")
        }

    }).then(function(response) {
        $scope.CTHDNhap = response.data;
        let total = 0;
        $scope.CTHDNhap.forEach(e => {
            total += e.sl_dog * e.gia_nhap
        });
        $scope.total = total;
        console.log(response.data);
    }, err => console.log(err));

    
    // $http({
    //     method: "get",
    //     url: "http://localhost:8000/api/billsnhap/TTKH/" + localStorage.getItem("khach"),
    //     params: {
    //         KHID: localStorage.getItem("id_kh")
    //     }
        
    // }).then(function(response) {
    //     $scope.TTKH = response.data;
    //     console.log(response.data);
    // }, err => console.log(err));

    $http({
        method: "GET",
        url: "http://localhost:8000/api/employees"
    }).then(function(response) {
        $scope.employee = response.data;
    });

    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdnhaps"
    }).then(function(response) {
        $scope.hdnhaps = response.data;
    });
    
    $http({
        method: "get",
        url: "http://localhost:8000/api/hdnhaps/" + id,
        
    }).then(function(response) {
        $scope.hdnhap = response.data;
        console.log(response.data);
    }, err => console.log(err));
});