var app = angular.module('myapp', []); //tao 1 module
app.controller('newscontroller', function($scope, $http) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/baiviet"
    }).then(function(response) {
        $scope.baiviet = response.data;
    });
    $scope.showmodal = function(id_new) {
        $scope.id_new = id_new;
        if (id_new == 0) {
            $scope.modalTitle = "Add new news";
            if ($scope.new){
                $scope.new.title="";
                $scope.new.content="";    
                $scope.new.image="";    
            }
           
        } else {
            $scope.modalTitle = "Edit news";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/baiviet/" + id_new
            }).then(function(response) {
                $scope.new = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id_new) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/baiviet/" + id_new
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id_new == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/baiviet",
                data: $scope.new,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/baiviet/" + $scope.id_new,
                data: $scope.new,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});