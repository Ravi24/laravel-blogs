
var app = angular.module('grower_dtl',[]);
app.controller('growerCtrl',function($scope, $http, $log, $window){
   $scope.test = function(){
       $http({
           method : 'GET',
           url : 'http://localhost:8000/api/blog_details/1',
           
       }).then(function(response){
           $scope.title = response.data.p_title;
          $scope.body = response.data.p_body;
       });
   }
});

