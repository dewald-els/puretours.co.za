<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">

    <title>Pure Tours Admin - <?php echo $this->resources->data['page_title']; ?></title>
    <?php foreach ($this->resources->css as $css): ?>
        <link rel="stylesheet" href="<?php echo base_url($css) ?>"/>
    <?php endforeach; ?>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PureTours Admin</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dashboard <?php echo $this->resources->data['page_title'] == 'Dashboard' ? 'active': ''; ?>">
                    <a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
                </li>
                <li class="sport <?php echo $this->resources->data['page_title'] == 'Sport packages' ? 'active': ''; ?>">
                    <a href="<?php echo site_url('admin/sport-packages'); ?>">Sport packages</a>
                </li>
                <li class="ski <?php echo $this->resources->data['page_title'] == 'Ski packages' ? 'active': ''; ?>">
                    <a href="<?php echo site_url('admin/ski-packages'); ?>">Ski packages</a></li>
                <li class="robinson <?php echo $this->resources->data['page_title'] == 'Robinson packages' ? 'active': ''; ?>">
                    <a href="<?php echo site_url('admin/robinson-packages'); ?>">Robinson packages</a></li>
                <li class="resorts <?php echo $this->resources->data['page_title'] == 'Resorts' ? 'active': ''; ?>">
                    <a href="<?php echo site_url('admin/resorts'); ?>">Resorts</a></li>
                <li class="countries <?php echo $this->resources->data['page_title'] == 'Countries' ? 'active': ''; ?>">
                    <a href="<?php echo site_url('admin/countries'); ?>">Countries</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i> Settings<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('admin/users'); ?>"><i class="fa fa-users"></i> Users</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-sign-out"></span> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<main>

    <input type="hidden" id="base-url" value="<?php echo base_url(); ?>" />

    <?php foreach ($this->resources->views as $view): ?>
        <?php $this->load->view($view); ?>
    <?php endforeach; ?>

</main>

<div class="admin-status-bar">
    <p class="pull-left">
        <i class="fa fa-circle text-success"></i> Logged in as: <b><?php echo $this->session->userdata('user')['username']; ?></b>
    </p>

    <div class="pull-right">
        <a target="_blank" href="<?php site_url(); ?>"><i class="fa fa-home"></i> View site</a> |
        <a href="#profile"><i class="fa fa-user"></i> Profile</a>
    </div>

</div>

<?php foreach ($this->resources->js as $js): ?>
    <?php if (strpos($js, 'http') !== false): ?>
        <script type="text/javascript" async defer src="<?php echo $js; ?>"></script>
    <?php else: ?>
        <script type="text/javascript" src="<?php echo base_url($js); ?>"></script>
    <?php endif; ?>
<?php endforeach; ?>

</body>
</html>