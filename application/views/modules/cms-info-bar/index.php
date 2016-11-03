<?php if ($this->resources->data['user'] != false): ?>
<div class="cms-info-bar">
    <div class="info-bar-wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <span class="fa fa-user"></span>&nbsp;Logged in as:
                    <?php echo $this->resources->data['user']->username; ?>
                </div>

                <div class="col-xs-12 col-md-6">

                </div>

            </div>

        </div>

    </div>
</div>
<?php endif; ?>