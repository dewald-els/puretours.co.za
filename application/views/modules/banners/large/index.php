<div id="mod-banner-lg" class="banner"
     style="background: url(<?php echo base_url($this->resources->data['page']->modules['bannerLarge']->data->src); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <?php if (isset($this->resources->data['page']->modules['bannerLarge']->data->content)): ?>
                    <?php $this->load->view('modules/banners/banner-content/index', array('content' => $this->resources->data['page']->modules['bannerLarge']->data->content)); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>