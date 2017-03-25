<?php $this->load->view('modules/header/index'); ?>
<?php $this->load->view('modules/nav-public/index'); ?>
<?php $this->load->view('modules/banners/large/index', array('background_url'=>'assets/img/modules/banners/banner-pureskiing.jpg')); ?>
<?php $this->load->view('modules/tiles/row_of_four/index', array(
    'tiles' => array(
        0 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/row-of-four/all-inclusive.jpg'
        ),
        1 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/row-of-four/full-board.jpg'
        ),
        2 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/row-of-four/hosted.jpg'
        ),
        3 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/row-of-four/chalets.jpg'
        )
    )
)); ?>
<?php $this->load->view('modules/pages/pureskiing/index'); ?>
<?php $this->load->view('modules/footer/index'); ?>

