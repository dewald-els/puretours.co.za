APP.controller('PackageBuilderSmallCtrl', ['$scope', 'PackageService','CountryService','ResortService', 'CommService',
    function ($scope, PackageService, CountryService,ResortService, CommService) {

    $scope.PackageBuilderSmall = {
        destinations: null,
        destinationsOpen: false,
        selectedDestination: null,
        dates: {
            startDate: null,
            endDate: null
        },
        init: function () {
            let self = this;
            self.getAvailableDestinations();
        },
        getAvailableDestinations: function () {
            CountryService.getAvailableCountries().then(function (response) {
                $scope.PackageBuilderSmall.destinations = response.data.countries;
            })
        },
        toggleOpenDestinations: function () {
            $scope.PackageBuilderSmall.destinationsOpen = $scope.PackageBuilderSmall.destinationsOpen != true;
        },
        selectDestination: function (destination) {
            $scope.PackageBuilderSmall.selectedDestination = destination;
            $scope.PackageBuilderSmall.destinationsOpen = false;
        },
        sendEmail: function () {
            if ($scope.PackageBuilderSmall.selectedDestination && $scope.PackageBuilderSmall.dates.startDate) {
                CommService.sendEmail(null);
                swal("Enquiry sent", "Your enquiry for packages to " + $scope.PackageBuilderSmall.selectedDestination.country_name + " has been sent.", "success");
                $scope.PackageBuilderSmall.currentForm = 'complete-form';
            }
            else {
                sweetAlert("Oops...", "Please select a destination and dates to send and enquiry.", "error");
            }

        }
    };
}]);