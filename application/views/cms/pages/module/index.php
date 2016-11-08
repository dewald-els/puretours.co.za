<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">
                    <?php $this->load->view('modules/buttons/cms-back-button/index'); ?>
                    Edit the <?php echo $this->resources->data['module']->name; ?>
                    on the <?php echo $this->resources->data['page']->page_title; ?> page</h1>
                <p>Edit the module data for the <?php echo $this->resources->data['page']->page_title; ?> page.</p>
            </div>
        </div>
    </div>

    <?php $this->load->view($this->resources->data['module']->path."/editor"); ?>

</div>