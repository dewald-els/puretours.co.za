<div id="sport-packages">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-sport">Sport packages</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12">

                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Package name</th>
                            <th>Active</th>
                            <th width="50">Edit</th>
                            <th width="50">Hide</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i = $this->resources->data['start'] + 1; foreach ($this->resources->data['packages'] as $package): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $package->package_name; ?></td>
                            <td>Yes</td>
                            <td><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button></td>
                            <td><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>

                </table>

                <ul class="pagination pagination-sm">
                    <?php echo $this->resources->data['pagination_links']; ?>
                </ul>

            </div>

        </div>
    </div>
</div>