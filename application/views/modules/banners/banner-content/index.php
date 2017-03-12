<div class="banner-content">
    <h4 class="content-text"><?php echo $content->text; ?></h4>
    <?php if (isset($content->button)): ?>
        <button class="pt-btn"><?php echo $content->button->text; ?> <i class="fa fa-angle-right"></i></button>
    <?php endif; ?>
</div>


