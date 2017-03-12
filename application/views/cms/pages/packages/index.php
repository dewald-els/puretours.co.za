<div class="container" ng-controller="CMS_PackagesCtrl" ng-init="Packages.getSportPackages()">
    <div class="row">
        <div class="col-xs-12">
            <h1>Packages</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12">

            <div>

                <!-- Nav tabs -->
                <ul id="package-tabs" class="nav nav-tabs" role="tablist" data-tabs="tabs">
                    <li role="presentation" class="active"><a  ng-click="Packages.getSportPackages()" href="#puresport" aria-controls="home" role="tab" data-toggle="tab">Pure sport</a></li>
                    <li role="presentation"><a ng-click="Packages.getSkiPackages()" href="#pureski" aria-controls="profile" role="tab" data-toggle="tab">Pure ski</a></li>
                    <li role="presentation"><a ng-click="Packages.getRobinsonPackages()" href="#robinson" aria-controls="messages" role="tab" data-toggle="tab">Robinson</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="puresport">
                        <?php $this->load->view('cms/pages/packages/tabs/puresport'); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="pureski">
                        <?php $this->load->view('cms/pages/packages/tabs/pureski'); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="robinson">
                        <?php $this->load->view('cms/pages/packages/tabs/robinson'); ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>