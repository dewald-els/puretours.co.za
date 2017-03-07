<div id="mod-tiles-row-four">

    <div class="container">


        <div class="row">

            <?php foreach ($this->resources->data['page']->modules['rowOfFour']->data->tiles as $tile): ?>
                <a href="<?php echo site_url($tile->link); ?>">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="tile">
                            <img src="<?php echo base_url($tile->src); ?>" alt="">
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>


    </div>

</div>