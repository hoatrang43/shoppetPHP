var app= angular.module ('myapp',[]);//tao 1 module
    app.controller('slidecontroller',function ($scope,$http) { //tao 1 controller
        $http({
            method:"GET",
            url:"http://localhost:8000/api/slides"
        }).then(function(response) {
            console.log(response.data);
            $scope.slides = response.data;
        });
        $scope.showmodal = function(id_slide) {
            $scope.id_slide = id_slide;
            if (id_slide == 0) {
                $scope.modalTitle = "Add new slide";
                if($scope.slide){
                    $scope.slide.link="";
                    $scope.slide.image="";
                }

            } else {
                $scope.modalTitle = "Edit slide";
                $http({
                    method: "GET",
                    url: "http://localhost:8000/api/slides/" + id_slide
                }).then(function(response) {
                    $scope.slide = response.data;
                });
            }
            $('#modelId').modal('show');
        }
        $scope.deleteClick = function(id) {
            var hoi = confirm("Ban co muon xoa that khong");
            if (hoi) {
                $http({
                    method: "DELETE",
                    url: "http://localhost:8000/api/slides/" + id_slide
                }).then(function(response) {
                    $scope.message = response.data;
                    location.reload();
                });
            }
        }
        $scope.saveData = function() {
            if ($scope.id_slide == 0) { //dang them moi sp
                $http({
                    method: "POST",
                    url: "http://localhost:8000/api/slides",
                    data: $scope.slide,
                    "content-Type": "application/json"
                }).then(function(response) {
                    $scope.message = response.data;
                    console.log(response.data);
                    location.reload();
    
                });
            } else { //sua san pham
                $http({
                    method: "PUT",
                    url: "http://localhost:8000/api/slides/" + $scope.id_slide,
                    data: $scope.slide,
                    "content-Type": "application/json"
                }).then(function(response) {
                    $scope.message = response.data;
                    console.log(response.data);
                    location.reload();
    
                });
            }
        }
    });