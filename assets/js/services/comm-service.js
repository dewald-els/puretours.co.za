/**
 * Created by forest-sumo on 2017/03/20.
 */
APP.factory('CommService', ['$http', function ($http) {

    return {
        sendEmail: function (data) {
            console.log('sending an email...');
        }
    }

}]);