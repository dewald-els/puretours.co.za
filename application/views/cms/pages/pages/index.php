<div class="page" ng-controller="PagesCtrl">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">Pages</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">

                <div class="page-list">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Date added</th>
                                <th>Active</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="page in Pages.pages track by $index">

                                <td>{{page.page_title}}</td>
                                <td>{{page.slug}}</td>
                                <td>{{page.date_created|limitTo:10}}</td>

                                <td>{{page.active == '1' ? "Yes" : "No"}}</td>
                                <td>
                                    <a role="button" href="<?php echo site_url('admin/pages'); ?>/{{page.page_id}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>
</div>