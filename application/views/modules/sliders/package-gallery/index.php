<div class="package-gallery">

    <div class="slider">

        <div class="arrows">
            <button class="arrow left">&nbsp;</button>
            <button class="arrow right">&nbsp;</button>
        </div>

        <button class="pt-btn btn-book-now">Book now <i class="fa fa-angle-right"></i></button>

        <button class="pt-btn blue btn-call-you">Let us call you <i class="fa fa-angle-right"></i></button>

        <ul>
            <?php $i = 1;
            foreach ($packageGallery as $slide): ?>
                <li class="slide" style='background: transparent url("<?php echo base_url($slide->src); ?>")'>



                </li>
            <?php $i++; endforeach; ?>
        </ul>
    </div>
</div>
