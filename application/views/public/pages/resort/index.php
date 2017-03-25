<?php $this->load->view('modules/header/index'); ?>
<?php $this->load->view('modules/nav-public/index'); ?>
<?php $this->load->view('modules/banners/small/index', array('background_url'=> $this->resources->data['resort']->banner)); ?>
<?php $this->load->view('modules/pages/resort/index'); ?>
<?php $this->load->view('modules/footer/index'); ?>