<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary text-bold">Media library</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">

                <div class="media-contents">

                    <?php foreach ($this->resources->data['folders'] as $folder => $files): ?>

                        <h1><i class="fa fa-folder"></i> <?php echo $folder; ?></h1>


                        <?php foreach ($files as $file): ?>

                            <img src="<?php echo base_url('assets/img/'.$folder.'/'.$file); ?>" alt="" width="50">

                        <?php endforeach; ?>


                    <?php endforeach; ?>


                </div>

            </div>
        </div>
    </div>
</div>