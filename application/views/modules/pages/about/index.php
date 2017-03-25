<div id="about" ng-controller="AboutCtrl">

    <div class="intro-tabs">
        <div class="intro-tabs-titles">

            <div class="container">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <h4 ng-click="About.toggleActiveTab('whoWeAre')" data-content-id="who-we-are" class="tab-title"
                            ng-class="{'active':About.activeTab == 'whoWeAre'}"><b>Who</b> we are</h4>
                    </div>
                    <div class="col-xs-4 text-center">
                        <h4 ng-click="About.toggleActiveTab('ourPhilosophy')" data-content-id="our-philosophy"
                            class="tab-title" ng-class="{'active':About.activeTab == 'ourPhilosophy'}">Our
                            <b>philosophy</b></h4>
                    </div>
                    <div class="col-xs-4 text-center">
                        <h4 ng-click="About.toggleActiveTab('whyUs')" data-content-id="why-us" class="tab-title"
                            ng-class="{'active':About.activeTab == 'whyUs'}">Why <b>choose us</b></h4>
                    </div>
                </div>
            </div>


        </div>

        <div class="intro-tabs-content">

            <div id="who-we-are" ng-show="About.activeTab == 'whoWeAre'">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="intro-tabs-content">
                                <h1>Who we are..</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam
                                    suscipit commodo. Duis nunc mauris, consequat id tincidunt vel, condimentum
                                    vulputate purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque
                                    ante, porta dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet
                                    lacus maximus. Nulla eget velit vestibulum, posuere odio in, viverra orci. Cras
                                    egestas tincidunt nulla, at placerat massa porta at.</p>
                                <p> Vivamus tincidunt nulla nulla, vel tempor purus porttitor sit amet.
                                    Donec tortor purus, aliquet vel condimentum non, rutrum sed nulla. Morbi posuere,
                                    libero eget fringilla hendrerit, urna odio vehicula diam, ac scelerisque mi urna ut
                                    velit. Sed ante libero, rutrum eu quam vitae, pellentesque pharetra nisl. Aliquam ac
                                    maximus dolor, vulputate fringilla erat. Ut hendrerit urna aliquam ante vehicula, et
                                    porttitor orci interdum. Maecenas ac neque eu dui venenatis consectetur sed ac ante.
                                    Donec id lorem elementum, posuere felis quis, semper erat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="our-philosophy" ng-show="About.activeTab == 'ourPhilosophy'">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="intro-tabs-content">
                                <h1>Our philosophy..</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam
                                    suscipit commodo. Duis nunc mauris, consequat id tincidunt vel, condimentum
                                    vulputate purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque
                                    ante, porta dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet
                                    lacus maximus. Nulla eget velit vestibulum, posuere odio in, viverra orci. Cras
                                    egestas tincidunt nulla, at placerat massa porta at.</p>
                                <p> Vivamus tincidunt nulla nulla, vel tempor purus porttitor sit amet.
                                    Donec tortor purus, aliquet vel condimentum non, rutrum sed nulla. Morbi posuere,
                                    libero eget fringilla hendrerit, urna odio vehicula diam, ac scelerisque mi urna ut
                                    velit. Sed ante libero, rutrum eu quam vitae, pellentesque pharetra nisl. Aliquam ac
                                    maximus dolor, vulputate fringilla erat. Ut hendrerit urna aliquam ante vehicula, et
                                    porttitor orci interdum. Maecenas ac neque eu dui venenatis consectetur sed ac ante.
                                    Donec id lorem elementum, posuere felis quis, semper erat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="why-choose-us" ng-show="About.activeTab == 'whyUs'">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="intro-tabs-content">
                                <h1>Why us..</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam
                                    suscipit commodo. Duis nunc mauris, consequat id tincidunt vel, condimentum
                                    vulputate purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque
                                    ante, porta dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet
                                    lacus maximus. Nulla eget velit vestibulum, posuere odio in, viverra orci. Cras
                                    egestas tincidunt nulla, at placerat massa porta at.</p>
                                <p> Vivamus tincidunt nulla nulla, vel tempor purus porttitor sit amet.
                                    Donec tortor purus, aliquet vel condimentum non, rutrum sed nulla. Morbi posuere,
                                    libero eget fringilla hendrerit, urna odio vehicula diam, ac scelerisque mi urna ut
                                    velit. Sed ante libero, rutrum eu quam vitae, pellentesque pharetra nisl. Aliquam ac
                                    maximus dolor, vulputate fringilla erat. Ut hendrerit urna aliquam ante vehicula, et
                                    porttitor orci interdum. Maecenas ac neque eu dui venenatis consectetur sed ac ante.
                                    Donec id lorem elementum, posuere felis quis, semper erat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php $this->load->view('modules/find-your-escape/index'); ?>

        </div>

    </div>

    <div class="find-action">
        <div class="container">

            <div class="row">

                <div class="col-xs-12 text-center">

                    <h2 class="title"><span class="blue">3 ways</span> to escape and find action:</h2>

                </div>

            </div>

            <div class="row">
                <div class="col-xs-12 col-md-4 column">
                    <div class="logo-heading text-center">
                        <img src="<?php echo base_url('assets/img/logos/pt-skiing-on-white.jpg'); ?>" alt="">
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam
                            suscipit commodo. Duis nunc mauris,t consequat id tincidunt vel, condimentum vulputate
                            purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque ante, porta
                            dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet lacus maximus. Nulla
                            eget velit vestibulum, posuere odio in, viverra orci. Cras egestas tincidunt nulla, at
                            placerat massa porta at. Vivamus tincidunt nulla nulla, vel tempor purus porttitor sit amet.
                            Donec tortor purus, aliquet vel condimentum non, rutrum sed nulla. Morbi posuere, libero
                            eget fringilla hendrerit, urna odio vehicula diam, ac scelerisque mi urna ut velit. Sed ante
                            libero, rutrum eu quam vitae, pellentesque pharetra nisl. Aliquam ac maximus dolor,
                            vulputate fringilla erat. Ut hendrerit urna aliquam ante vehicula, et porttitor orci
                            interdum. Maecenas ac neque eu dui venenatis consectetur sed ac ante. Donec id lorem
                            elementum, posuere felis quis, semper erat.
                        </p>
                    </div>
                    <div class="footer">
                        <a href="#pure-skiing" role="button" class="pt-btn">Find my escape</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 column">
                    <div class="logo-heading text-center">
                        <img src="<?php echo base_url('assets/img/logos/pt-sport-on-white.jpg'); ?>" alt="">
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam
                            suscipit commodo. Duis nunc mauris,t consequat id tincidunt vel, condimentum vulputate
                            purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque ante, porta
                            dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet lacus maximus. Nulla
                            eget velit vestibulum, posuere odio in, viverra orci. Cras egestas tincidunt nulla, at
                            placerat massa porta at. Vivamus tincidunt nulla nulla, vel tempor purus porttitor sit amet.
                            Donec tortor purus, aliquet vel condimentum non, rutrum sed nulla. Morbi posuere, libero
                            eget fringilla hendrerit, urna odio vehicula diam, ac scelerisque mi urna ut velit. Sed ante
                            libero, rutrum eu quam vitae, pellentesque pharetra nisl. Aliquam ac maximus dolor,
                            vulputate fringilla erat. Ut hendrerit urna aliquam ante vehicula, et porttitor orci
                            interdum. Maecenas ac neque eu dui venenatis consectetur sed ac ante. Donec id lorem
                            elementum, posuere felis quis, semper erat.
                        </p>
                    </div>
                    <div class="footer">
                        <a href="#pure-skiing" role="button" class="pt-btn">Find my escape</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 column">
                    <div class="logo-heading text-center">
                        <img src="<?php echo base_url('assets/img/logos/pt-robinson-on-white.jpg'); ?>" alt="">
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam
                            suscipit commodo. Duis nunc mauris,t consequat id tincidunt vel, condimentum vulputate
                            purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque ante, porta
                            dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet lacus maximus. Nulla
                            eget velit vestibulum, posuere odio in, viverra orci. Cras egestas tincidunt nulla, at
                            placerat massa porta at. Vivamus tincidunt nulla nulla, vel tempor purus porttitor sit amet.
                            Donec tortor purus, aliquet vel condimentum non, rutrum sed nulla. Morbi posuere, libero
                            eget fringilla hendrerit, urna odio vehicula diam, ac scelerisque mi urna ut velit. Sed ante
                            libero, rutrum eu quam vitae, pellentesque pharetra nisl. Aliquam ac maximus dolor,
                            vulputate fringilla erat. Ut hendrerit urna aliquam ante vehicula, et porttitor orci
                            interdum. Maecenas ac neque eu dui venenatis consectetur sed ac ante. Donec id lorem
                            elementum, posuere felis quis, semper erat.
                        </p>
                    </div>
                    <div class="footer">
                        <a href="#pure-skiing" role="button" class="pt-btn">Find my escape</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="tiles specials">

        <div class="container">

            <div class="row">

                <div class="col-xs-12">

                    <?php for ($i = 1; $i <= 6; $i++): ?>


                        <div class="tile">
                            <a href="#about">
                                <img src="<?php echo base_url('assets/img/modules/about/tiles/' . $i . '.jpg'); ?>"
                                     alt="">
                            </a>
                        </div>


                    <?php endfor; ?>

                </div>

            </div>

        </div>

    </div>

    <div class="types">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="all-inclusive type">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/img/modules/about/types/all-inclusive.png'); ?>"
                                 alt="All inclusive">
                        </div>

                        <h4>WHAT IS ALL-INCLUSIVE?</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam suscipit commodo. Duis nunc mauris, consequat id tincidunt vel, condimentum vulputate purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque ante, porta dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet lacus maximus. Nulla eget velit vestibulum, posuere odio in, viverra orci. Cras egestas tincidunt nulla, at placerat massa porta at. Vivamus tincidunt nulla nulla, vel tempor
                        </p>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="full-board type">

                        <div class="text-center">
                            <img src="<?php echo base_url('assets/img/modules/about/types/full-board.png'); ?>"
                                 alt="All inclusive">
                        </div>

                        <h4>WHAT IS FULL BOARD?</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam suscipit commodo. Duis nunc mauris, consequat id tincidunt vel, condimentum vulputate purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque ante, porta dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet lacus maximus. Nulla eget velit vestibulum, posuere odio in, viverra orci. Cras egestas tincidunt nulla, at placerat massa porta at. Vivamus tincidunt nulla nulla, vel tempor
                        </p>

                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-xs-12">

                    <div class="hosted">
                        <div class="left">
                            <h4>WHAT IS HOSTED & ENTERTAINED?</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend magna et quam suscipit commodo. Duis nunc mauris, consequat id tincidunt vel, condimentum vulputate purus. Phasellus mollis non eros vel hendrerit. Nam tristique pellentesque ante, porta dictum tortor. Etiam volutpat metus sed lacus rhoncus, sodales aliquet lacus maximus.
                            </p>
                        </div>
                        <div class="right" style="background: #000 url('<?php echo base_url('assets/img/modules/about/types/hosted.jpg'); ?>') top left no-repeat">
                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div>


            </div>

        </div>

    </div>


</div>