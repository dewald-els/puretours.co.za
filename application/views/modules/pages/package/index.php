<div id="package-detail">

    <div id="package-title-container" class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <h1><b><?php echo $this->resources->data['package']->package_name; ?></b></h1>
            </div>
            <div class="col-xs-12 col-md-3 text-center package-title-pricing-col">
                <div class="package-title-pricing text-left">
                    <span class="from">From</span>
                    <h2>R <?php echo money_format('%i', $this->resources->data['package']->base_price); ?></h2>
                    <small>per person including taxes</small>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2 class="title resort-name"><?php echo $this->resources->data['package']->resort->resort_name; ?></h2>
                <h4 class="sub-title country-name"><?php echo $this->resources->data['package']->country; ?></h4>
                <p><?php echo $this->resources->data['package']->resort->resort_description; ?></p>
            </div>
            <div class="col-xs-12 col-md-6">

                <div class="package-tags">

                    <div class="row">
                        <div class="col-xs-4 col-x-5">
                            <div class="package-tag duration">
                                <span class="days"><?php echo $this->resources->data['package']->duration; ?></span>
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
                    <p>
                        <?php echo nl2br($this->resources->data['package']->included); ?>
                    </p>
                </div>

                <div class="inclusions">
                    <h4 class="title">EXCLUSIONS:</h4>
                    <p><?php echo nl2br($this->resources->data['package']->excluded); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <?php $this->load->view('modules/sliders/package-gallery/index', array('packageGallery' => $this->resources->data['package']->gallery)); ?>

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