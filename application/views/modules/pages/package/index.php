<div id="package-detail" ng-controller="PackageCtrl" ng-init="Package.fetchPackageInfo()">
    <input type="hidden" ng-model="Package.packageId" ng-value="<?php echo $this->resources->data['page']->modules['package']->data->package_id; ?>">

    <div id="package-title-container" class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h1><b>Package title</b> here</h1>
            </div>
            <div class="col-xs-12 col-md-3 text-center package-title-pricing-col">
                <div class="package-title-pricing text-left">
                    <span class="from">From</span>
                    <h2>R{{Package.packageDetail.price}}</h2>
                    <small>per person including taxes</small>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2 class="title resort-name">{{Package.packageDetail.resort_name}}</h2>
                <h4 class="sub-title country-name">COUNTRY NAME</h4>
                <p>Introduction here ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at.</p>
                <p>Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at. Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Cras posuere commodo dolor, eget porttitor ante sollicitudi.</p>
            </div>
            <div class="col-xs-12 col-md-6">

                <div class="package-tags">

                    <div class="row">
                        <div class="col-xs-4 col-x-5">
                            <div class="package-tag duration">
                                <span class="days">7</span>
                                Nights
                            </div>
                        </div>
                        <div class="col-xs-4 col-x-5">
                            <div class="package-tag">
                                <i class="tag tag-flights"></i>
                                <span class="tag-name">Flights</span>
                            </div>


                        </div>
                        <div class="col-xs-4 col-x-5">
                            <div class="package-tag">
                                <i class="tag tag-hosted"></i>
                                <span class="tag-name">Hosted</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-x-5">
                            <div class="package-tag">
                                <i class="tag tag-all-inclusive"></i>
                                <span class="tag-name">All inclusive</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-x-5">
                            <div class="package-tag">
                                <i class="tag tag-ski-pass"></i>
                                <span class="tag-name">Ski pass</span>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="inclusions">
                    <h4 class="title">INCLUSIONS:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at. Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="inclusions">
                    <h4 class="title">EXCLUSIONS:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at. Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <?php $this->load->view('modules/sliders/package-gallery/index', array('packageGallery' => $this->resources->data['page']->modules['package']->data->packageGallery)); ?>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <h4 class="title">YOU MIGHT ALSO LIKE <b>THESE PACKAGES</b>:</h4>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-md-6"><?php $this->load->view('modules/package-card/index'); ?></div>
            <div class="col-xs-12 col-md-6"><?php $this->load->view('modules/package-card/index'); ?></div>

        </div>

    </div>

</div>