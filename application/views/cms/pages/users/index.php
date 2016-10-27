<div class="page" ng-controller="UsersCtrl">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Users</h1>
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
                        <tr ng-repeat="user in User.users">
                            <td>{{$index+1}}</td>
                            <td>{{user.first_name}}</td>
                            <td>{{user.last_name}}</td>
                            <td>{{user.username}}</td>
                            <td>{{user.email}}</td>
                            <td>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>