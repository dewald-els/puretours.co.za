<?php /** @var $package \PT_Classes\oPackage */; ?>
<div class="package-card-lg">

    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-md-9">

                <h2 class="package-title"><?php echo $package->package_name; ?></h2>

            </div>

            <div class="col-xs-12 col-md-3">

                <div class="package-tags">
                    <h2>tags here</h2>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-md-6 col-lg-3 match-height match-height-lg">

                <div class="package-img">
                    <img class="img-responsive" src="<?php echo base_url('assets/img/modules/packages/1/thumbnail.jpg'); ?>" alt="">
                </div>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3 match-height match-height-lg">

                <p class="package-introduction">
                    <?php echo nl2br($package->package_description); ?>
                </p>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3 match-height match-height-lg">

                <div class="package-detail">
                    <ul>
                        <li><b>Valid:</b> <span class="valid-dates">
                                <?php echo date('d M', strtotime($package->date_available)); ?> -
                                <?php echo date('d M Y', strtotime($package->date_end)); ?></span>
                        </li>
                        <li><b>Duration: </b> <span class="duration"><?php echo $package->duration; ?> Nights</span></li>
                        <li><b>Includes:</b> <?php echo $package->included; ?></li>
                        <li><b>Excludes:</b> <?php echo $package->excluded; ?></li>
                    </ul>
                </div>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3 match-height match-height-lg">

                <div class="pricing">


                    <h2>
                        <span class="from">From only</span>
                        R <span class="price"><?php echo number_format($package->base_price,0,'.',' '); ?></span>
                        <small>Per person including taxes</small>
                    </h2>



                    <a role="button" href="<?php echo site_url('package/'.$package->package_id.'/'.$package->url_friendly_name); ?>" class="pt-btn">View package</a>
                </div>

            </div>

        </div>

    </div>

</div>