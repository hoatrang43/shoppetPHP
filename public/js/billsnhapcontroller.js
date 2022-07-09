var app = angular.module('myapp', []); //tao 1 module
app.controller('billsnhapcontroller', function($scope, $http) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/billsnhap"
    }).then(function(response) {
        $scope.billsnhap = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new bills_nhap";
            if ($scope.hdnhap){
                $scope.hdnhap.date_order="";
                $scope.hdnhap.tong_tien="";    
                $scope.hdnhap.thanh_toan="";   
                $scope.hdnhap.note="";    
            }
           
        } else {
            $scope.modalTitle = "Edit bills_nhap";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/billsnhap/" + id
            }).then(function(response) {
                $scope.hdnhap = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/billsnhap/" + id
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
                url: "http://localhost:8000/api/billsnhap",
                data: $scope.hdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/billsnhap/" + $scope.id,
                data: $scope.hdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});