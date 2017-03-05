<div id="top5-locations">

    <div class="container">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <h4 class="text-uppercase slider-title">Our <b>top 5</b> Locations</h4>
            </div>
        </div>
    </div>

    <div class="slider">
        <ul>
            <?php $i = 1; foreach ($this->resources->data['page']->modules['top5Locations']->data->slides as $slide): ?>
                <li class="slide" style='background: transparent url("<?php echo $slide->src; ?>")'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-3 col-xs-12 col-md-5">
                                <h1 class="slide-title"><span class="slide-number"><?php echo $i; ?>.</span> <?php echo $slide->title; ?></h1>
                                <p><?php echo $slide->text; ?></p>
                                <?php if (isset($slide->button)): ?>
                                    <a class="main-button" role="button" href="<?php echo base_url($slide->button->link); ?>">
                                        <?php echo $slide->button->text; ?>
                                    </a>
                                <?php endif; ?>


                                <div class="arrows">
                                    <button class="arrow left">&nbsp;</button>
                                    <button class="arrow right">&nbsp;</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
            <?php $i++; endforeach; ?>
        </ul>
    </div>


</div>
