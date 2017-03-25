<div id="mod-banner-lg" class="banner"
     style="background: url(<?php echo base_url($background_url); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <?php if (isset($content)): ?>
                    <?php $this->load->view('modules/banners/banner-content/index', array('content' => $content)); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>