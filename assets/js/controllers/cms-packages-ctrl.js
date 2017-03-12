APP.controller('CMS_PackagesCtrl', ['$scope', '$http', function ($scope, $http) {

    $scope.Packages = {
        sportPackages: [],
        skiPackages: [],
        robinsonPackages: []
    };

    $scope.Packages.getSportPackages = function () {
        console.log('Getting sport packages');
    };

    $scope.Packages.getSkiPackages = function () {
        console.log('Getting ski packages');
    };

    $scope.Packages.getRobinsonPackages = function () {
        console.log('Getting robinson packages');
    };


}]);