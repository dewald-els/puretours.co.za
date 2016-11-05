<div class="page" ng-controller="UsersCtrl">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">Users</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-show="User.users.length == 0">
                        <td colspan="6" align="center">
                            <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                        </td>
                    </tr>
                    <tr ng-repeat="user in User.users">
                        <td>{{$index+1}}</td>
                        <td>{{user.first_name}}</td>
                        <td>{{user.last_name}}</td>
                        <td>{{user.username}}</td>
                        <td>{{user.email}}</td>
                        <td>
                            <a role="button" href="<?php echo site_url('admin/users/'); ?>{{user.user_id}}"
                               class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>