<div class="page" ng-controller="EditPageCtrl">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">Edit page</h1>
            </div>
        </div>

        <form action="" name="editPageForm">

            <input type="hidden" ng-model="EditPage.page_id" value="<?php echo $this->resources->data['page']->page_id; ?>">

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input class="form-control" type="text" placeholder="Page title" value="<?php echo $this->resources->data['page']->page_title; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input class="form-control" type="text" placeholder="Page slug" value="<?php echo $this->resources->data['page']->slug; ?>">
                        <small>Hint: (This is displayed in the address bar of the browser)</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Active:</label>
                        <select class="form-control" name="" id="">
                            <option value="1" <?php echo $this->resources->data['page']->active == 1 ?'selected':''; ?>>Yes</option>
                            <option value="0" <?php echo $this->resources->data['page']->active == 0 ?'selected':''; ?>>No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Date created: <?php echo $this->resources->data['page']->date_created; ?></label>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">Edit modules</h1>
            </div>
        </div>

        <div class="row" ng-if="EditPage.loadingModules">
            <div class="col-xs-12 text-center">
                <div class="spacer-25"></div>
                <p>
                    <i class="fa fa-cog fa-spin fa-2x fa-fw" aria-hidden="true"></i>
                </p>
                <p><b>Loading page modules...</b></p>
            </div>
        </div>

        <div class="row" ng-if="EditPage.modules.length == 0">
            <div class="col-xs-12">
                <p><i class="fa fa-info-circle"></i> <b>There are no modules set up for this page.</b></p>
            </div>
        </div>

        <div class="row" ng-repeat="module in EditPage.modules">
            <div class="col-xs-12">
                <h4>{{module.module_name}}</h4>
            </div>
        </div>

    </div>
</div>
