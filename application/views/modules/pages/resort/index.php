<div class="mod-resort">

    <div class="resort-name">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="resort-heading">
                        <h1><?php echo $this->resources->data['resort']->resort_name; ?></h1>
                        <h4><?php echo $this->resources->data['resort']->country_name; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p><?php echo nl2br($this->resources->data['resort']->resort_description); ?></p>
            </div>
            <div class="col-xs-12 col-md-6">
                <?php $this->load->view('modules/resort-gallery/index', array(
                    'gallery' => array(
                        'main' => array(
                            'src' => 'assets/img/gallery/resort-gallery/'.$this->resources->data['resort']->resort_id.'/001.jpg'
                        ),
                        'thumbs' => array(
                            0 => array('src' => 'assets/img/gallery/resort-gallery/'.$this->resources->data['resort']->resort_id.'/002.jpg'),
                            1 => array('src' => 'assets/img/gallery/resort-gallery/'.$this->resources->data['resort']->resort_id.'/003.jpg'),
                            2 => array('src' => 'assets/img/gallery/resort-gallery/'.$this->resources->data['resort']->resort_id.'/004.jpg')
                        )
                    )
                )); ?>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <?php $this->load->view('modules/sliders/resort-slider/index', array(
                    'slides' => array(
                        0 => array('src' => 'assets/img/modules/sliders/resort-slider/'.$this->resources->data['resort']->resort_id.'/1.jpg'),
                        1 => array('src' => 'assets/img/modules/sliders/resort-slider/'.$this->resources->data['resort']->resort_id.'/2.jpg'),
                    )
                )); ?>

            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="text-uppercase">You might also like <b>these destinations</b></h4>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px;">

        <?php $this->load->view('modules/tiles/row_of_four/index', array(
            'tiles' => array(
                0 => array(
                    'link' => '',
                    'src' => 'assets/img/modules/tiles/resort-recommended-destinations/4.jpg'
                ),
                1 => array(
                    'link' => '',
                    'src' => 'assets/img/modules/tiles/resort-recommended-destinations/3.jpg'
                ),
                2 => array(
                    'link' => '',
                    'src' => 'assets/img/modules/tiles/resort-recommended-destinations/2.jpg'
                ),
                3 => array(
                    'link' => '',
                    'src' => 'assets/img/modules/tiles/resort-recommended-destinations/1.jpg'
                )
            )
        )); ?>

    </div>

</div>
