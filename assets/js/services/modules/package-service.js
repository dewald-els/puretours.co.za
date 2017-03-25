/**
 * Created by forest-sumo on 2017/03/09.
 */
APP.factory('PackageService', ['$http', function ($http) {

    return {

        getInfo: function (packageId) {
            return $http.post(baseUrl + '/cms/package/get_info',{
                packageId: packageId
            })
        }

    }

}]);