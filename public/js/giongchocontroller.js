var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('giongchocontroller', function($scope, $http) { //tao 1 controller
    const id = localStorage.getItem('chosenId');
    
    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }
    $scope.timkiem = "";
    $scope.serial = 1;
    $scope.itemPerPage=5
    $scope.indexCount = function(newPageNumber){

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $scope.sort = function(keyname){
        $scope.sortBy = keyname; //the sort column name
        $scope.reverse =!$scope.reverse;// ASC/DESC sorting
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/giongs"
    }).then(function(response) {
        console.log(response.data);
        $scope.giongs = response.data;
    });
    $http({
        method: "get",
        url: "http://localhost:8000/api/giongs/" + id,
        // params: {
        //     ProductName: localStorage.getItem("ten_giong")
        // }
    }).then(function(response) {
        $scope.giong = response.data;
        console.log(response.data);
    }, err => console.log(err));
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm giống chó cảnh mới";
            if($scope.giong){
                $scope.giong.ten_giong = "";
                $scope.giong.thong_tin = "";
                $scope.giong.dac_diem = "";
                $scope.giong.anh = "";
            }
            
        } else {
            $scope.modalTitle = "Sửa thông tin";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/giongs/" + id
            }).then(function(response) {
                $scope.giong = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/giongs/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $scope.giong.anh=document.getElementById("img").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/giongs",
                data: $scope.giong,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $scope.giong.anh=document.getElementById("img").innerHTML;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/giongs/" + $scope.id,
                data: $scope.giong,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});