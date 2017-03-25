APP.controller('PackageBuilderCtrl', ['$scope', 'PackageService','CountryService','ResortService', 'CommService',
    function ($scope, PackageService, CountryService,ResortService, CommService) {

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
        init: function () {
            let self = this;
            self.getAvailableDestinations();
            self.getAvailableResorts();
        },
        getAvailableDestinations: function () {
            CountryService.getAvailableCountries().then(function (response) {
                $scope.PackageBuilder.destinations = response.data.countries;
            })
        },
        getAvailableResorts: function () {
            ResortService.getAvailableResorts().then(function (response) {
                $scope.PackageBuilder.resorts = response.data.resorts;
            })
        },
        toggleOpenDestinations: function () {
            $scope.PackageBuilder.destinationsOpen = $scope.PackageBuilder.destinationsOpen != true;
            $scope.PackageBuilder.resortsOpen = false;
        },
        selectDestination: function (destination) {
            $scope.PackageBuilder.selectedDestination = destination;
            $scope.PackageBuilder.destinationsOpen = false;
            $scope.PackageBuilder.selectedResort = null;
        },
        toggleOpenResorts: function () {
            $scope.PackageBuilder.resortsOpen = $scope.PackageBuilder.resortsOpen != true;
            $scope.PackageBuilder.destinationsOpen = false;
        },
        selectResort: function (resort) {
            $scope.PackageBuilder.selectedResort = resort;
            $scope.PackageBuilder.resortsOpen = false;
            $scope.PackageBuilder.selectedDestination = null;
        },
        sendEmail: function () {
            CommService.sendEmail(null);
            $scope.PackageBuilder.currentForm = 'complete-form';
        },
        validateForm: function (switchTo) {

            let canSwitch = true;
            let errors = [];

            if (switchTo == 'personal-form'){

                if ($scope.PackageBuilder.selectedDestination == '' && $scope.PackageBuilder.selectedResort == '') { // Resort is filled in
                    canSwitch = false;
                    errors.push('Choose a destination or a resort.');
                }

                if ($scope.PackageBuilder.dates.startDate == '' || $scope.PackageBuilder.dates.endDate == ''){
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
            }
        },
        switchForms: function (switchTo) {
            let formValidation = $scope.PackageBuilder.validateForm(switchTo);
            if (formValidation.canSwitch) {
                $scope.PackageBuilder.currentForm = switchTo;
            } else {
                alert('Incomplete');
                console.log(formValidation.errors);
            }
        }
    };
}]);