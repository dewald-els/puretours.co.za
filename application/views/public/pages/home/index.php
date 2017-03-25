<?php $this->load->view('modules/header/index'); ?>
<?php $this->load->view('modules/nav-public/index'); ?>
<?php $this->load->view('modules/banners/large/index', array('background_url'=>'assets/img/modules/banners/banner-home.jpg')); ?>
<?php $this->load->view('modules/tiles/featured/index', array(
    'tiles' => array(
        0 => 'assets/img/modules/tiles/featured/all-inclusive.jpg',
        1 => 'assets/img/modules/tiles/featured/full-board.jpg',
        2 => 'assets/img/modules/tiles/featured/wide-hosted.jpg',
        3 => 'assets/img/modules/tiles/featured/beach.jpg',
        4 => 'assets/img/modules/tiles/featured/ski-chalet.jpg',
        5 => 'assets/img/modules/tiles/featured/sports.jpg',
    )
)); ?>
<?php $this->load->view('modules/sliders/top5locations/index', array(
    'slides' => array(
        0 => array(
            'src' => 'assets/img/modules/sliders/top5locations/slide1.jpg',
            'title' => 'Italy',
            'text' => 'Text about Italy here. Modern Italian cuisine has developed through centuries of social and political changes, with roots as far back as the 4th century BC. Italian cuisine in itself takes heavy influences, including Etruscan, and Jewish.',
            'button' => array(
                'text' => 'See Italian escapes',
                'link' => 'packages/italy'
            )
        ),
        1 => array(
            'src' => 'assets/img/modules/sliders/top5locations/slide2.jpg',
            'title' => 'Germany',
            'text' => 'Text about Germany here. Modern German cuisine has developed through centuries of social and political changes, with roots as far back as the 4th century BC. Italian cuisine in itself takes heavy influences, including Etruscan, and Jewish.',
            'button' => array(
                'text' => 'See German escapes',
                'link' => 'packages/germany'
            )
        )
    )
)); ?>
<?php $this->load->view('modules/tiles/twocolnews/index', array(
    'tiles' => array(
        0 => array(
            'link' => 'package/1/wimbeldon',
            'src' => 'assets/img/modules/tiles/twocolnews/tile1.jpg'
        ),
        1 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/twocolnews/tile2.jpg'
        ),
        2 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/twocolnews/tile3.jpg'
        ),
        3 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/twocolnews/tile4.jpg'
        ),
        4 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/twocolnews/tile5.jpg'
        ),
        5 => array(
            'link' => '',
            'src' => 'assets/img/modules/tiles/twocolnews/tile6.jpg'
        )
    )
)); ?>
<?php $this->load->view('modules/footer/index'); ?>