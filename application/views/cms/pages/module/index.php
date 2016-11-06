<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">
                    <?php $this->load->view('modules/buttons/cms-back-button/index'); ?>
                    Edit the <?php echo $this->resources->data['module']->name; ?>
                    on the <?php echo $this->resources->data['page']->page_title; ?> page</h1>
                <p>Edit the module data for the <?php echo $this->resources->data['page']->page_title; ?> page.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <form action="">
                    <?php foreach ($this->resources->data['options'] as $option): ?>
                        <div class="form-group">
                            <label class="control-label"><?php echo $option->label; ?></label>
                            <?php if ($option->type == 'text'): ?>
                            <?php elseif ($option->type == 'file'): ?>
                                <input type="file" placeholder="Choose a file" class="btn btn-default">
                            <?php elseif ($option->type == 'tel'): ?>
                                <input type="tel" placeholder="Enter a telephone number" class="form-control"/>
                            <?php elseif ($option->type == 'number'): ?>
                                <input type="number" placeholder="Enter a value" class="form-control"/>
                            <?php elseif ($option->type == 'page_link'): ?>
                                <select value="" class="form-control">
                                    <option value="">Home</option>
                                </select>
                                <small>Hint: Choose the which page to open when you click on the tile.</small>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                    <div class="form-group text-right">
                        <button class="btn btn-danger">Cancel</button>
                        <button class="btn btn-success">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>