var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('loaiphukiencontroller', function($scope, $http) { //tao 1 controller
    const id = localStorage.getItem('chosenId');
    
    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }
    $scope.timkiem="";
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
        url: "http://localhost:8000/api/categories"
    }).then(function(response) {
        console.log(response.data);
        $scope.categories = response.data;
    });
    $http({
        method: "get",
        url: "http://localhost:8000/api/categories/" + id,
        
    }).then(function(response) {
        $scope.category = response.data;
        console.log(response.data);
    }, err => console.log(err));
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm loại phụ kiện mới";
            if($scope.category){
                $scope.category.ten_loai = "";
                $scope.category.mo_ta = "";
            }
            
        } else {
            $scope.modalTitle = "Sửa thông tin";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/categories/" + id
            }).then(function(response) {
                $scope.category = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/categories/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/categories",
                data: $scope.category,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/categories/" + $scope.id,
                data: $scope.category,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});