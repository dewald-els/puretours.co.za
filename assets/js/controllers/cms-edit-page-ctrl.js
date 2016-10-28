/**
 * Created by forest on 2016/10/26.
 */
APP.controller('EditPageCtrl', ['$scope','$http','$location', function ($scope, $http, $location) {

    let url = $location.absUrl().split('/');


    $scope.EditPage = {
        page_id: url[url.length-1],
        loadingModules: true,
        modules: [],
        getPageModules: function () {
            $http.post('/admin/pages/get-page-modules',{
                page_id: $scope.EditPage.page_id
            }).then(function (resp) {
                $scope.EditPage.loadingModules = false;
                $scope.EditPage.modules = resp.data.data;
            }).catch(function (resp) {
                $scope.EditPage.loadingModules = false;
            });
        }
    };


    console.log($scope.EditPage.page_id);


    $scope.EditPage.getPageModules();


}]);