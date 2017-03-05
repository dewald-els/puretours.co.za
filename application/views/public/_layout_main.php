<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" ng-app="pureTours">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">

    <meta name="keywords" content="<?php echo $this->resources->data['page']->keywords; ?>">
    <meta name="description" content="<?php echo $this->resources->data['page']->description; ?>">

    <title>Pure Tours - <?php echo $this->resources->data['page']->title; ?></title>
    <?php foreach ($this->resources->css as $css): ?>
        <link rel="stylesheet" href="<?php echo base_url($css) ?>" />
    <?php endforeach; ?>

    <?php foreach ($this->resources->data['page']->modules as $module): ?>
        <?php if (isset($module->plugins) && isset($module->plugins->css)): ?>
            <?php foreach ($module->plugins->css as $css): ?>
                <link href="<?php echo base_url($css); ?>" rel="stylesheet" type="text/css" />
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</head>
<body ng-controller="AppCtrl" ng-cloak>

    <main ng-controller="PageCtrl">
        <?php $this->load->view('public/_page_template'); ?>
    </main>

    <?php foreach ($this->resources->js as $js): ?>
        <script type="text/javascript" src="<?php echo base_url($js) ?>"></script>
    <?php endforeach; ?>

    <?php foreach ($this->resources->data['page']->modules as $module): ?>
        <?php if (isset($module->plugins) && isset($module->plugins->js)): ?>
            <?php foreach ($module->plugins->js as $js): ?>
                <script type="text/javascript" src="<?php echo base_url($js); ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>

</body>
</html>