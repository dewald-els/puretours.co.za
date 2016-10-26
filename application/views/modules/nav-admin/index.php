<nav class="navbar navbar-default">
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
                <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Pages</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <a role="button" class="btn btn-default" href="#"><i class="fa fa-home"></i> Site<span class="sr-only">(current)</span></a>
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-lock"></i>
                    Logout
                </button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>