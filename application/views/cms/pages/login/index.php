<div class="page" ng-controller="UsersCtrl">

    <div class="container login-page">

        <div class="spacer-25"></div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <div id="login-logo">
                    <img src="<?php echo base_url('assets/img/logos/pt-dark-trsp-183x52.png'); ?>" alt="">
                </div>
            </div>
        </div>

        <div class="spacer-25"></div>
        <div class="spacer-25"></div>
        
        <div class="row">
            <div class="col-xs-6 col-lg-offset-3">
                <div class="">
                    <div class="login-form">
                        <h1><i class="fa fa-user"></i> Admin login</h1>
                        <form action="<?php echo site_url('admin/login-user'); ?>" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                            <button class="btn btn-primary">Login</button>
                        </form>
                        <div class="spacer-25"></div>
                        <?php if (isset($this->resources->data['loginResult'])): ?>
                        <div class="alert alert-danger">
                            <i class="fa fa-warning"></i><?php echo $this->resources->data['loginResult']->message; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>