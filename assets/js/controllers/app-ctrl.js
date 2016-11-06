/**
 * Created by dewaldels on 2016/07/09.
 */
APP.controller('AppCtrl', ['$scope','$location', function ($scope, $location) {

    $scope.App = {
        UI: {}
    };
    $scope.App.UI.getActiveNav = function (url) {
        let _url = $location.absUrl().split('/');
        return _url.indexOf(url) !== -1;
    }
}]);