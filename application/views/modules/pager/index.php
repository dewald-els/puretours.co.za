<div class="pager">


    <button class="pt-btn back"><i class="fa fa-angle-left"></i> Back</button>

    <div class="pager-content">

        <div class="summary">Page <?php echo $this->resources->data['current_page']; ?> of <?php echo $this->resources->data['num_of_pages']; ?></div>

        <div class="pages">
            <?php echo $this->resources->data['pagination_links']; ?>
        </div>
    </div>


    <button class="pt-btn next">Next <i class="fa fa-angle-right"></i></button>


</div>