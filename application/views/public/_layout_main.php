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
        <link rel="stylesheet" href="<?php echo base_url($css) ?>"/>
    <?php endforeach; ?>
</head>
<body ng-controller="AppCtrl" ng-cloak>


<main ng-controller="PageCtrl">

    <input type="hidden" id="base-url" value="<?php echo base_url(); ?>" />

    <?php foreach ($this->resources->views as $view): ?>
        <?php $this->load->view($view); ?>
    <?php endforeach; ?>

</main>

<?php foreach ($this->resources->js as $js): ?>
    <?php if (strpos($js, 'http') !== false): ?>
        <script type="text/javascript" async defer src="<?php echo $js; ?>"></script>
    <?php else: ?>
        <script type="text/javascript" src="<?php echo base_url($js); ?>"></script>
    <?php endif; ?>
<?php endforeach; ?>


</body>
</html>