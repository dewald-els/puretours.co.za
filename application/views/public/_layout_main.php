<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" ng-app="pureTours">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>Pure Tours - <?php echo $this->resources->data['page']->title; ?></title>
    <?php foreach ($this->resources->css as $css): ?>
        <link rel="stylesheet" href="<?php echo base_url($css) ?>" />
    <?php endforeach; ?>
</head>
<body ng-controller="AppCtrl" ng-cloak>

    <?php $this->load->view('modules/nav/index'); ?>

    <?php if ($this->resources->header == 1) $this->load->view('modules/header/index'); ?>


    <main>
        <?php $this->load->view('public/_page_template'); ?>
    </main>

    <?php if ($this->resources->footer == 1) $this->load->view('modules/footer/index'); ?>

    <?php foreach ($this->resources->js as $js): ?>
        <script type="text/javascript" src="<?php echo base_url($js) ?>"></script>
    <?php endforeach; ?>

</body>
</html>