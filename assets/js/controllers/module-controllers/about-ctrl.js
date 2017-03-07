/**
 * Created by forest-sumo on 2017/03/06.
 */

APP.controller('AboutCtrl', ['$scope', function ($scope) {


    $scope.About = {
        activeTab: 'whoWeAre'
    };

    $scope.About.toggleActiveTab = function (newTab) {
        $scope.About.activeTab = newTab;
    }



}]);