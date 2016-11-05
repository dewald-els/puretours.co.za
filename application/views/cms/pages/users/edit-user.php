<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">Edit user</h1>
            </div>
        </div>

        <form action="" name="editPageForm">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="">First name</label>
                        <input class="form-control" type="text" placeholder="User first name" value="<?php echo $this->resources->data['user']->first_name; ?>">
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="">Last name</label>
                        <input class="form-control" type="text" placeholder="User last name" value="<?php echo $this->resources->data['user']->last_name; ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input class="form-control" type="email" placeholder="Users email address" value="<?php echo $this->resources->data['user']->email; ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">User role:</label>
                        <select class="form-control" name="" id="">
                            <option value="1" <?php echo $this->resources->data['user']->active == 1 ?'selected':''; ?>>Admin</option>
                            <option value="2" <?php echo $this->resources->data['user']->active == 0 ?'selected':''; ?>>Editor</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="">New password</label>
                        <input class="form-control" type="password" placeholder="Enter a new password" value="">
                        <small>Hint: Leave the password fields blank if you don't want to change it.</small>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="">Confirm new password</label>
                        <input class="form-control" type="password" placeholder="Confirm new password" value="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Active:</label>
                        <select class="form-control" name="" id="">
                            <option value="1" <?php echo $this->resources->data['user']->active == 1 ?'selected':''; ?>>Yes</option>
                            <option value="0" <?php echo $this->resources->data['user']->active == 0 ?'selected':''; ?>>No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Date created: <?php echo $this->resources->data['user']->date_created; ?></label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="text-right">
                        <button class="btn btn-danger">Cancel</button>
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
