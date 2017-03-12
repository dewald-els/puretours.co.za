APP.controller('PackageCtrl', ['$scope', 'PackageService', function ($scope, PackageService) {

    $scope.Package = {
        packageId: null,
        packageDetail: null,
        fetchPackageInfo: function () {
            PackageService.getInfo($scope.Package.packageId)
                .then(function (response) {
                    console.log(response.data);
                    $scope.Package.packageDetail = response.data.package;
                }).catch(function (response) {
                    console.log(response.data);
                });
        }
    };

}]);