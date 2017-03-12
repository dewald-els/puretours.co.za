<div id="mod-banner-med" class="banner"
     style="background: url(<?php echo base_url($this->resources->data['page']->modules['bannerMedium']->data->src); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <?php if (isset($this->resources->data['page']->modules['bannerMedium']->data->content)): ?>
                    <?php $this->load->view('modules/banners/banner-content/index', array('content' => $this->resources->data['page']->modules['bannerMedium']->data->content)); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>