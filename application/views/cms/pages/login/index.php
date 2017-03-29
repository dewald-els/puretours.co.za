<div class="container" id="login-page">
    
    <div class="row">

        <div class="col-md-offset-3 col-md-6">

            <div class="login-form">

                <div class="text-center">
                    <img src="<?php echo base_url('assets/img/logos/pt-dark-trsp-183x52.png'); ?>" alt="Pure Tours">
                </div>


                <h1>Hello, please login to continue</h1>

                <form action="<?php echo site_url('admin/login'); ?>" method="post">

                    <div class="form-group">
                        <label for="">Username</label>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Enter your username" value="<?php echo $this->input->post('username'); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" value="<?php echo $this->input->post('password'); ?>" />
                    </div>

                    <button type="submit" name="login" id="login" value="login" class="btn btn-primary">Login</button>

                </form>

                <br>
                <a href="<?php echo site_url('admin/password-reset'); ?>">Forgot your password?</a>

            </div>
            


        </div>

    </div>
</div>