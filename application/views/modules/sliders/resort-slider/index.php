<div class="mod-resort-slider">

    <div class="resort-slider">
        <ul>
            <?php $i = 1;
            foreach ($slides as $slide): ?>
                <li class="slide" style='background: url("<?php echo base_url($slide['src']); ?>") top center no-repeat; background-size: cover;'>
                    &nbsp;
                </li>
                <?php $i++; endforeach; ?>
        </ul>
    </div>

    <div class="resort-slider-controls">

        <?php $this->load->view('modules/find-your-escape/index'); ?>

    </div>

</div>