<div id="find-your-escape" class="container" ng-controller="PackageBuilderSmallCtrl" ng-init="PackageBuilderSmall.init()">
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="find-your-escape">

                <div class="left-text">
                    <span>Find your</span>
                    <span><b>Escape Now</b></span>
                </div>

                <div>
                    <div class="pt-drowpdown-wrapper" ng-class="{'dropdown-open': PackageBuilderSmall.destinationsOpen }" style="display: inline-block">
                        <button class="pt-btn pt-btn-white btn-select-dest" ng-disabled="!PackageBuilderSmall.destinations" ng-click="PackageBuilderSmall.toggleOpenDestinations()">
                            <span ng-hide="PackageBuilderSmall.selectedDestination">Select your destination</span>
                            <span ng-show="PackageBuilderSmall.selectedDestination">{{PackageBuilderSmall.selectedDestination.country_name}}</span>
                            <i class="fa fa-angle-right"></i>
                        </button>
                        <div class="list" ng-class="{'hidden': ! PackageBuilderSmall.destinationsOpen }">
                            <div class="list-item" ng-repeat="destination in PackageBuilderSmall.destinations" ng-click="PackageBuilderSmall.selectDestination(destination)">
                                {{destination.country_name}}
                            </div>
                        </div>
                    </div>

                    <input date-range-picker data-opens="left" class="pt-btn pt-btn-white btn-select-dates date-picker" type="text" readonly
                           ng-model="PackageBuilderSmall.dates"
                           placeholder="Select your dates *" style="display: inline-block"/>
                    <button class="pt-btn" ng-click="PackageBuilderSmall.sendEmail()">Find your escape</button>
                </div>

            </div>
        </div>
    </div>
</div>