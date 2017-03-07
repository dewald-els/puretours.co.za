<div id="contact">
    <div class="find-your-escape-wrapper">
        <?php $this->load->view('modules/find-your-escape/index'); ?>
    </div>

    <div id="contact-us-forms" class="container">

        <div class="row">

            <div class="col-xs-12 col-md-8">

                <h2>Contact <b>us</b></h2>


                <form action="">
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Surname" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Telephone" class="form-control">
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Message"
                                  class="form-control"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked> Receive newsletter</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <button class="pt-btn">Send your message <i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </form>


            </div>

            <div class="col-xs-12 col-md-4">

                <h2>Direct <b>contact</b></h2>


                <address>
                    <h5>Street Address</h5>
                    <p>
                        Shop 5D, Northlands Corner<br>
                        New Market Road<br>
                        Northriding<br>
                        2162
                    </p>

                    <h5>Postal Address</h5>
                    <p>
                        Private Bag X 26<br>
                        Suite 7<br>
                        Northriding<br>
                        2162
                    </p>


                    <p>
                        <b>Share call:</b> 0861 123 754
                    </p>

                    <p>
                        <b>Telephone:</b> 011 462 3673
                    </p>

                    <p>
                        <b>Fax:</b> 086 231 2341
                    </p>

                    <p>
                        <b>Email:</b> <a href="mailto:greg@puretours.co.za"
                                         style="color: #3d3d3d">greg@puretours.co.za</a>
                    </p>


                </address>

            </div>


        </div>


    </div>

    <div id="build-a-package">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">

                    <div class="text-right">
                        <img class="build-text-arrow" src="<?php echo base_url('assets/img/backgrounds/modules/contact/build-text-arrow.png'); ?>"
                             alt="">
                    </div>


                    <?php $this->load->view('modules/package-card/index'); ?>

                </div>

                <div class="col-xs-4">

                    <?php $this->load->view('modules/package-builder/index'); ?>



                </div>
            </div>
        </div>
    </div>

    <div id="packages">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <?php $this->load->view('modules/package-card/index'); ?>
                </div>

                <div class="col-xs-12 col-md-6">
                    <?php $this->load->view('modules/package-card/index'); ?>
                </div>

                <div class="col-xs-12 col-md-6">
                    <?php $this->load->view('modules/package-card/index'); ?>
                </div>

                <div class="col-xs-12 col-md-6">
                    <?php $this->load->view('modules/package-card/index'); ?>
                </div>

            </div>

        </div>

    </div>

    <div id="map"></div>

</div>