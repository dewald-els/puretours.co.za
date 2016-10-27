/**
 * Created by forest on 2016/10/26.
 */
APP.controller('UsersCtrl', ['$scope','$http', function ($scope, $http) {

    $scope.User = {
        users: [],
        getUsers: function () {
            $http.get('/admin/users/get_users').then(function (resp) {
                $scope.User.users = resp.data.data;
            }).catch(function (resp) {

            });
        }
    };


    $scope.User.getUsers();


}]);