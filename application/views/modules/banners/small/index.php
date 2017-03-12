<div id="mod-banner-sm" class="banner"
     style="background: url(<?php echo base_url($this->resources->data['page']->modules['bannerSmall']->data->src); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <?php if (isset($this->resources->data['page']->modules['bannerSmall']->data->content)): ?>
                    <?php $this->load->view('modules/banners/banner-content/index', array('content' => $this->resources->data['page']->modules['bannerSmall']->data->content)); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>