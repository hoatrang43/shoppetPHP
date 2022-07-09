var app = angular.module('myapp', []); //tao 1 module
app.controller('userscontroller', function($scope, $http) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/users"
    }).then(function(response) {
        console.log(response.data);
        $scope.users = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new user";
            if($scope.user){
                $scope.user.full_name = "";
                $scope.user.users_name = "";
                $scope.user.email = "";
                $scope.user.password = "";
                $scope.user.phone = "";
                $scope.user.address = "";
                // $scope.user.image = "";
                $scope.user.Delet = "";
            }
            
        } else {
            $scope.modalTitle = "Edit user";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/users/" + id
            }).then(function(response) {
                $scope.user = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/users/" + id
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
                url: "http://localhost:8000/api/users",
                data: $scope.user,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/users/" + $scope.id,
                data: $scope.user,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});