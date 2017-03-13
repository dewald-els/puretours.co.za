<div id="packages-page">

    <?php $this->load->view('modules/package-filter/index'); ?>


    <div class="container">

        <?php for ($i = 0; $i < 5; $i++): ?>
        <div class="row">
            <div class="col-xs-12">
                <?php $this->load->view('modules/package-card-large/index'); ?>
            </div>
        </div>
        <?php endfor; ?>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php $this->load->view('modules/pager/index'); ?>
            </div>
        </div>
    </div>



</div>