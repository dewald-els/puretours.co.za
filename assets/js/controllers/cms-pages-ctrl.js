/**
 * Created by forest on 2016/10/26.
 */
APP.controller('PagesCtrl', ['$scope','$http', function ($scope, $http) {

    $scope.Pages = {
        pages: [],
        getPages: function () {
            $http.get('/admin/pages/get_pages').then(function (resp) {
                $scope.Pages.pages = resp.data.data;
            }).catch(function (resp) {

            });
        }
    };


    $scope.Pages.getPages();


}]);