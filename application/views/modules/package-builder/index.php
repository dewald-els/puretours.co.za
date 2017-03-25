<div class="mod-package-builder" ng-controller="PackageBuilderCtrl" ng-init="PackageBuilder.init()">

    <div class="package-builder">

        <img src="<?php echo base_url('assets/img/modules/contact/builder-logo.jpg'); ?>"
             alt="">

        <h4>Build your own escape and we’ll make it happen!</h4>

        <div class="trip-form" ng-class="{'hidden': PackageBuilder.currentForm != 'trip-form'}">
            <div class="pt-drowpdown-wrapper" ng-class="{'dropdown-open': PackageBuilder.destinationsOpen }">
                <button class="pt-btn pt-btn-white" ng-disabled="!PackageBuilder.destinations" ng-click="PackageBuilder.toggleOpenDestinations()">
                    <span ng-hide="PackageBuilder.selectedDestination">Select your destination</span>
                    <span ng-show="PackageBuilder.selectedDestination">{{PackageBuilder.selectedDestination.country_name}}</span>
                    <i class="fa fa-angle-right"></i>
                </button>
                <div class="list" ng-class="{'hidden': ! PackageBuilder.destinationsOpen }">
                    <div class="list-item" ng-repeat="destination in PackageBuilder.destinations" ng-click="PackageBuilder.selectDestination(destination)">
                        {{destination.country_name}}
                    </div>
                </div>
            </div>

            <div class="text-center separator">
                <h4>OR</h4>
            </div>

            <div class="pt-drowpdown-wrapper" ng-class="{'dropdown-open': PackageBuilder.resortsOpen }">
                <button class="pt-btn pt-btn-white" ng-disabled=" ! PackageBuilder.resorts" ng-click="PackageBuilder.toggleOpenResorts()">
                    <span ng-hide="PackageBuilder.selectedResort">Select your destination</span>
                    <span ng-show="PackageBuilder.selectedResort">{{PackageBuilder.selectedResort.resort_name}}</span>
                    <i class="fa fa-angle-right"></i>
                </button>
                <div class="list" ng-class="{'hidden': ! PackageBuilder.resortsOpen }">
                    <div class="list-item" ng-repeat="resort in PackageBuilder.resorts" ng-click="PackageBuilder.selectResort(resort)">
                        {{resort.resort_name}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input date-range-picker data-opens="left" class="form-control date-picker" type="text" readonly
                       ng-model="PackageBuilder.dates"
                       placeholder="Select your dates *"/>
            </div>

            <div class="num-of-people">
                <div class="pull-left half">
                    <label for="kids">No. of Adults *</label>
                    <input type="text" class="form-control" placeholder="1 - 10" maxlength="2" max="10" ng-model="PackageBuilder.noOfAdults" ng-value="0">
                </div>

                <div class="pull-left half">
                    <label for="kids">No. of Kids *</label>
                    <input type="text" class="form-control" placeholder="1 - 10" maxlength="2" max="10" ng-model="PackageBuilder.noOfKids" ng-value="0">
                </div>
                <div class="clearfix"></div>
            </div>

            <button class="pt-btn" ng-click="PackageBuilder.switchForms('personal-form')">Next <i class="fa fa-angle-right"></i></button>
        </div>

        <div class="personal-form" ng-class="{'hidden': PackageBuilder.currentForm != 'personal-form'}">

            <div class="form-group">
                <label for="">Name *</label>
                <input type="text" class="form-control" placeholder="Your name and surname" ng-model="PackageBuilder.name">
            </div>

            <div class="form-group">
                <label for="">Email *</label>
                <input type="text" class="form-control" placeholder="Your email address" ng-model="PackageBuilder.email">
            </div>

            <div class="form-group">
                <label for="">Telephone *</label>
                <input type="text" maxlength="10" class="form-control" placeholder="Your telephone number" ng-model="PackageBuilder.tel">
            </div>

            <br>

            <button class="pt-btn" ng-click="PackageBuilder.sendEmail()">Send <i class="fa fa-angle-right"></i></button>

        </div>

        <div class="complete-form" ng-class="{'hidden': PackageBuilder.currentForm != 'complete-form'}">

            <div class="text-center">
                <i class="fa fa-envelope" style="font-size: 32px;"></i>
            </div>

            <h4>We have sent your request</h4>

            <p>We have sent your enquiry to our helpful team. Someone will get back to you very soon!</p>

            <hr>

            <p><i class="fa fa-check-circle"></i> Thank you for your support.</p>


        </div>

    </div>

</div>