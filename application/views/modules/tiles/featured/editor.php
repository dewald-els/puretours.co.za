<div class="page">
    <div id="mod-tiles-featured" class="editor container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="tile blue">
                    <div>
                        <img class="img-responsive" src="<?php echo base_url($this->resources->data['page']->modules['featuredTiles']->data->tiles[0]->src); ?>" alt="">
                    </div>

                    <form action="">
                        <div class="form-group">
                            <label>Page link</label>
                            <select name="" id="" class="form-control">
                                <?php foreach ($this->resources->data['pages'] as $page): ?>
                                    <option value="<?php echo $page->slug; ?>"><?php echo $page->page_title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tile image</label>
                            <input type="file" class="form-control btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="tile orange">
                    <div>
                        <img class="img-responsive" src="<?php echo base_url($this->resources->data['page']->modules['featuredTiles']->data->tiles[1]->src); ?>" alt="">
                    </div>

                    <form action="">
                        <div class="form-group">
                            <label>Page link</label>
                            <select name="" id="" class="form-control">
                                <?php foreach ($this->resources->data['pages'] as $page): ?>
                                    <option value="<?php echo $page->slug; ?>"><?php echo $page->page_title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tile image</label>
                            <input type="file" class="form-control btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="tile">
                    <div>
                        <img class="img-responsive" src="<?php echo base_url($this->resources->data['page']->modules['featuredTiles']->data->tiles[2]->src); ?>" alt="">
                    </div>

                    <form action="">
                        <div class="form-group">
                            <label>Page link</label>
                            <select name="" id="" class="form-control">
                                <?php foreach ($this->resources->data['pages'] as $page): ?>
                                    <option value="<?php echo $page->slug; ?>"><?php echo $page->page_title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tile image</label>
                            <input type="file" class="form-control btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="tile">
                    <div>
                        <img class="img-responsive" src="<?php echo base_url($this->resources->data['page']->modules['featuredTiles']->data->tiles[3]->src); ?>" alt="">
                    </div>

                    <form action="">
                        <div class="form-group">
                            <label>Page link</label>
                            <select name="" id="" class="form-control">
                                <?php foreach ($this->resources->data['pages'] as $page): ?>
                                    <option value="<?php echo $page->slug; ?>"><?php echo $page->page_title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tile image</label>
                            <input type="file" class="form-control btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="tile">
                    <div>
                        <img class="img-responsive" src="<?php echo base_url($this->resources->data['page']->modules['featuredTiles']->data->tiles[4]->src); ?>" alt="">
                    </div>

                    <form action="">
                        <div class="form-group">
                            <label>Page link</label>
                            <select name="" id="" class="form-control">
                                <?php foreach ($this->resources->data['pages'] as $page): ?>
                                    <option value="<?php echo $page->slug; ?>"><?php echo $page->page_title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tile image</label>
                            <input type="file" class="form-control btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="tile">
                    <div>
                        <img class="img-responsive" src="<?php echo base_url($this->resources->data['page']->modules['featuredTiles']->data->tiles[5]->src); ?>" alt="">
                    </div>

                    <form action="">
                        <div class="form-group">
                            <label>Page link</label>
                            <select name="" id="" class="form-control">
                                <?php foreach ($this->resources->data['pages'] as $page): ?>
                                    <option value="<?php echo $page->slug; ?>"><?php echo $page->page_title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tile image</label>
                            <input type="file" class="form-control btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
