'use strict';

/**
 * Created by dewaldels on 2016/07/09.
 */
/**
 * Created by dewaldels on 2016/07/09.
 */
APP.controller('AppCtrl', ['$scope', '$location', function ($scope, $location) {

    $scope.App = {
        UI: {
            Navbar: {}
        }
    };
    $scope.App.UI.Navbar.getActiveNav = function (url) {

        var _url = $location.absUrl().split('/');
        return _url.indexOf(url) !== -1;
    };

    $scope.App.UI.Navbar.isOpen = '';
    $scope.App.UI.Navbar.toggle = function () {
        $scope.App.UI.Navbar.isOpen = $scope.App.UI.Navbar.isOpen == true ? false : true;
    };
}]);
/**
 * Created by dewaldels on 2016/07/09.
 */
APP.controller('PageCtrl', ['$scope', function ($scope) {
    console.log('Page controller');
}]);
/**
 * Created by forest-sumo on 2017/03/06.
 */

APP.controller('AboutCtrl', ['$scope', function ($scope) {

    $scope.About = {
        activeTab: 'whoWeAre'
    };

    $scope.About.toggleActiveTab = function (newTab) {
        $scope.About.activeTab = newTab;
    };
}]);
APP.controller('PackageBuilderCtrl', ['$scope', 'PackageService', 'CountryService', 'ResortService', 'CommService', function ($scope, PackageService, CountryService, ResortService, CommService) {

    $scope.PackageBuilder = {
        destinations: null,
        destinationsOpen: false,
        resortsOpen: false,
        resorts: null,
        selectedDestination: null,
        selectedResort: null,
        dates: {
            startDate: null,
            endDate: null
        },
        noOfAdults: 0,
        noOfKids: 0,
        name: '',
        tel: '',
        email: '',
        currentForm: 'trip-form',
        init: function init() {
            var self = this;
            self.getAvailableDestinations();
            self.getAvailableResorts();
        },
        getAvailableDestinations: function getAvailableDestinations() {
            CountryService.getAvailableCountries().then(function (response) {
                $scope.PackageBuilder.destinations = response.data.countries;
            });
        },
        getAvailableResorts: function getAvailableResorts() {
            ResortService.getAvailableResorts().then(function (response) {
                $scope.PackageBuilder.resorts = response.data.resorts;
            });
        },
        toggleOpenDestinations: function toggleOpenDestinations() {
            $scope.PackageBuilder.destinationsOpen = $scope.PackageBuilder.destinationsOpen != true;
            $scope.PackageBuilder.resortsOpen = false;
        },
        selectDestination: function selectDestination(destination) {
            $scope.PackageBuilder.selectedDestination = destination;
            $scope.PackageBuilder.destinationsOpen = false;
            $scope.PackageBuilder.selectedResort = null;
        },
        toggleOpenResorts: function toggleOpenResorts() {
            $scope.PackageBuilder.resortsOpen = $scope.PackageBuilder.resortsOpen != true;
            $scope.PackageBuilder.destinationsOpen = false;
        },
        selectResort: function selectResort(resort) {
            $scope.PackageBuilder.selectedResort = resort;
            $scope.PackageBuilder.resortsOpen = false;
            $scope.PackageBuilder.selectedDestination = null;
        },
        sendEmail: function sendEmail() {
            CommService.sendEmail(null);
            $scope.PackageBuilder.currentForm = 'complete-form';
        },
        validateForm: function validateForm(switchTo) {

            var canSwitch = true;
            var errors = [];

            if (switchTo == 'personal-form') {

                if ($scope.PackageBuilder.selectedDestination == '' && $scope.PackageBuilder.selectedResort == '') {
                    // Resort is filled in
                    canSwitch = false;
                    errors.push('Choose a destination or a resort.');
                }

                if ($scope.PackageBuilder.dates.startDate == '' || $scope.PackageBuilder.dates.endDate == '') {
                    canSwitch = false;
                    errors.push('Select your dates.');
                }

                if ($scope.PackageBuilder.noOfAdults < 0) {
                    errors.push('Enter how many adults will be on the trip.');
                    canSwitch = false;
                }

                if ($scope.PackageBuilder.noOfKids < 0) {
                    canSwitch = false;
                    errors.push('Enter how many kids will be on the trip.');
                }

                if ($scope.PackageBuilder.noOfAdults == 0 && $scope.PackageBuilder.noOfKids == 0) {
                    canSwitch = false;
                    errors.push('Enter how many adults or kids will be on the trip');
                }
            }

            return {
                errors: errors,
                canSwitch: canSwitch
            };
        },
        switchForms: function switchForms(switchTo) {
            var formValidation = $scope.PackageBuilder.validateForm(switchTo);
            if (formValidation.canSwitch) {
                $scope.PackageBuilder.currentForm = switchTo;
            } else {
                alert('Incomplete');
                console.log(formValidation.errors);
            }
        }
    };
}]);
APP.controller('PackageBuilderSmallCtrl', ['$scope', 'PackageService', 'CountryService', 'ResortService', 'CommService', function ($scope, PackageService, CountryService, ResortService, CommService) {

    $scope.PackageBuilderSmall = {
        destinations: null,
        destinationsOpen: false,
        selectedDestination: null,
        dates: {
            startDate: null,
            endDate: null
        },
        init: function init() {
            var self = this;
            self.getAvailableDestinations();
        },
        getAvailableDestinations: function getAvailableDestinations() {
            CountryService.getAvailableCountries().then(function (response) {
                $scope.PackageBuilderSmall.destinations = response.data.countries;
            });
        },
        toggleOpenDestinations: function toggleOpenDestinations() {
            $scope.PackageBuilderSmall.destinationsOpen = $scope.PackageBuilderSmall.destinationsOpen != true;
        },
        selectDestination: function selectDestination(destination) {
            $scope.PackageBuilderSmall.selectedDestination = destination;
            $scope.PackageBuilderSmall.destinationsOpen = false;
        },
        sendEmail: function sendEmail() {
            if ($scope.PackageBuilderSmall.selectedDestination && $scope.PackageBuilderSmall.dates.startDate) {
                CommService.sendEmail(null);
                swal("Enquiry sent", "Your enquiry for packages to " + $scope.PackageBuilderSmall.selectedDestination.country_name + " has been sent.", "success");
                $scope.PackageBuilderSmall.currentForm = 'complete-form';
            } else {
                sweetAlert("Oops...", "Please select a destination and dates to send and enquiry.", "error");
            }
        }
    };
}]);
APP.controller('TwoColNewsCtrl', ['$scope', function ($scope) {

    $scope.TwoColNews = {
        news: []
    };
}]);