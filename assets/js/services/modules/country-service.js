/**
 * Created by forest-sumo on 2017/03/09.
 */
APP.factory('CountryService', ['$http', function ($http) {

    return {
        getAvailableCountries: function () {
            return $http.get(baseUrl + 'public/country/get_available_countries')
        }
    }

}]);