/**
 * Created by dewaldels on 2016/07/09.
 */
APP.controller('AppCtrl', ['$scope','$location', function ($scope, $location) {

    $scope.App = {
        UI: {}
    };
    $scope.App.UI.getActiveNav = function (path) {
        let p = $location.absUrl().split('/');
        console.log(p);
        return (p[p.length-1] == path);
    }

}]);