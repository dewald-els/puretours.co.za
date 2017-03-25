<div class="resort-gallery">

    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12">

                <div class="main-image">
                    <img class="img-responsive" src="<?php echo base_url($gallery['main']['src']); ?>" alt=""/>
                </div>

            </div>

        </div>

        <div class="row">

            <?php foreach($gallery['thumbs'] as $thumb): ?>
                <div class="col-xs-4">
                    <div class="thumb">
                        <img class="img-responsive" src="<?php echo base_url($thumb['src']); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>

</div>

