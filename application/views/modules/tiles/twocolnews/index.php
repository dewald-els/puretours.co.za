<div id="two-col-news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="tiles">
                    <?php foreach ($this->resources->data['page']->modules['twoColNews']->data->tiles as $tile): ?>
                        <a href="<?php echo site_url($tile->link); ?>">
                            <div class="tile" style='background: url("<?php echo $tile->src; ?>");'>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">

                <div class="top">
                    <h2><?php echo $this->resources->data['page']->modules['twoColNews']->data->content->top->title; ?></h2>

                    <p>
                        <?php echo nl2br($this->resources->data['page']->modules['twoColNews']->data->content->top->text); ?>
                    </p>

                    <a role="button" href="<?php echo $this->resources->data['page']->modules['twoColNews']->data->content->top->button->link; ?>">
                        <?php echo $this->resources->data['page']->modules['twoColNews']->data->content->top->button->text; ?>
                    </a>

                </div>

                <div class="separator"></div>

                <div class="bottom">
                    <h2><?php echo $this->resources->data['page']->modules['twoColNews']->data->content->bottom->title; ?></h2>
                </div>


            </div>
        </div>
    </div>
</div>