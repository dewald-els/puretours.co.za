<div id="packages-page">

    <?php $this->load->view('modules/package-filter/index'); ?>


    <?php if (count($this->resources->data['packages']) > 0): ?>
        <div class="container">
            <?php foreach ($this->resources->data['packages'] as $package): ?>
                <div class="row">
                    <div class="col-xs-12">
                        <?php $this->load->view('modules/package-card-large/index', array('package' => $package)); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php $this->load->view('modules/pager/index'); ?>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php if (count($this->resources->data['packages']) == 0): ?>
        <div class="no-packages-spacer"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>There are currently no packages listed.</h1>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12">
                    <h4>Head back to our <a href="<?php echo site_url('home'); ?>">home page.</a></h4>
                </div>

            </div>
        </div>
    <?php endif; ?>

</div>