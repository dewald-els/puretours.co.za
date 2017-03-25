<div id="mod-banner-sm" class="banner"
     style="background: url(<?php echo base_url($background_url); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <?php if (isset($content)): ?>
                    <?php $this->load->view('modules/banners/banner-content/index', array('content' => $content)); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>