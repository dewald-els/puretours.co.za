<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin'); ?>">
                <img src="<?php echo base_url('assets/img/logos/pt-dark-trsp-183x52.png'); ?>" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ng-class="{'active' : App.UI.Navbar.getActiveNav('dashboard')}">
                    <a href="<?php echo site_url('admin/dashboard'); ?>">
                       <i class="fa fa-fw fa-dashboard"></i> Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li ng-class="{'active' : App.UI.Navbar.getActiveNav('pages')}">
                    <a href="<?php echo site_url('admin/pages'); ?>">
                        <i class="fa fa-fw fa-file-text"></i> Pages
                    </a>
                </li>
                <li ng-class="{'active' : App.UI.Navbar.getActiveNav('packages')}">
                    <a href="<?php echo site_url('admin/packages'); ?>">
                        <i class="fa fa-fw fa-archive"></i> Packages
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
                <a role="button" class="btn btn-default" target="_blank" href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> Site<span class="sr-only">(current)</span></a>
                <a role="button" href="<?php echo site_url('admin/logout'); ?>" class="btn btn-danger">
                    <i class="fa fa-lock"></i>
                    Logout
                </a>
            </form>
            <?php if ($this->resources->data['user']->role_id == USER_ROLE_ADMIN): ?>
            <ul class="nav navbar-nav navbar-right">
                <li ng-class="{'active' : App.UI.Navbar.getActiveNav('users')}"><a href="<?php echo site_url('admin/users'); ?>">
                        <i class="fa fa-user-circle"></i> Users</a></li>

            </ul>
            <?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
