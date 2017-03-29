<div id="sport-packages">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-users">Users</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12">

                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Active</th>
                            <th width="50">Edit</th>
                            <th width="50">Hide</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; foreach ($this->resources->data['users'] as $user): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->active == 1 ? 'Yes' : 'No'; ?></td>
                            <td><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button></td>
                            <td><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>