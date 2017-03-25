<div id="two-col-news" ng-controller="TwoColNewsCtrl">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="tiles">
                    <?php foreach ($tiles as $tile): ?>
                        <a href="<?php echo site_url($tile['link']); ?>">
                            <div class="tile" style='background: url("<?php echo $tile['src']; ?>");'>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">

                <div class="top">
                    <h2 class="title">Discover Pure Tours</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at.
                    </p>
                        Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <p>
                        Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at. Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Cras posuere commodo dolor, eget porttitor ante sollicitudi.
                    </p>

                    <a role="button" class="pt-btn" href="<?php echo site_url('about'); ?>">Find out more about us<i class="fa fa-angle-right"></i></a>

                </div>

                <div class="separator"></div>

                <div class="bottom">
                    <h2>Latest travel news</h2>

                    <div id="2colnews-latest-news">
                        <p>Loading latest news...</p>
                    </div>

                    <a role="button" class="pt-btn">Read all travel news <i class="fa fa-angle-right"></i></a>
                </div>


            </div>
        </div>
    </div>
</div>