/**
 * Created by forest-sumo on 2017/03/09.
 */
APP.factory('ResortService', ['$http', function ($http) {

    return {

        getAvailableResorts: function () {
            return $http.get(baseUrl + '/resort/get_available_resorts')
        }

    }

}]);