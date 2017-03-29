'use strict';

var baseUrl = document.getElementById('base-url').value;
/**
 * Created by forest-sumo on 2017/03/20.
 */
APP.factory('CommService', ['$http', function ($http) {

    return {
        sendEmail: function sendEmail(data) {
            console.log('sending an email...');
        }
    };
}]);
/**
 * Created by forest-sumo on 2017/03/09.
 */
APP.factory('PackageService', ['$http', function ($http) {

    return {

        getInfo: function getInfo(packageId) {
            return $http.post(baseUrl + '/cms/package/get_info', {
                packageId: packageId
            });
        }

    };
}]);
/**
 * Created by forest-sumo on 2017/03/09.
 */
APP.factory('CountryService', ['$http', function ($http) {

    return {
        getAvailableCountries: function getAvailableCountries() {
            return $http.get(baseUrl + 'country/get_available_countries');
        }
    };
}]);
/**
 * Created by forest-sumo on 2017/03/09.
 */
APP.factory('ResortService', ['$http', function ($http) {

    return {

        getAvailableResorts: function getAvailableResorts() {
            return $http.get(baseUrl + '/resort/get_available_resorts');
        }

    };
}]);