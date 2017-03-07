<div id="mod-nav" class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="navbar" ng-class="{'open':App.UI.Navbar.isOpen}">
                <div class="controls">
                    <button ng-click="App.UI.Navbar.toggle()" class="nav-toggle">
                        <i class="fa fa-bars" ng-hide="App.UI.Navbar.isOpen"></i>
                        <i class="fa fa-arrow-left" ng-show="App.UI.Navbar.isOpen"></i>
                    </button>
                    <img class="navbar-brand" src="<?php echo base_url('assets/img/logos/pt-white-trsp-183x52.png'); ?>" alt="" width="75">
                </div>
                <ul class="navbar-left">
                    <li ng-class="{'active':App.UI.Navbar.getActiveNav('home')}"><a href="<?php echo site_url('home'); ?>">HOME</a></li>
                    <li ng-class="{'active':App.UI.Navbar.getActiveNav('pure-skiing')}"><a href="<?php echo site_url('pure-skiing'); ?>">PURE <b>SKIING</b></a></li>
                    <li ng-class="{'active':App.UI.Navbar.getActiveNav('pure-sport')}"><a href="<?php echo site_url('pure-sport'); ?>">PURE <b>SPORT</b></a></li>
                    <li ng-class="{'active':App.UI.Navbar.getActiveNav('robinson-club')}"><a href="<?php echo site_url('robinson-club'); ?>"><b>ROBINSON</b> CLUB</a>  </li>
                    <li ng-class="{'active':App.UI.Navbar.getActiveNav('about')}"><a href="<?php echo site_url('about'); ?>">ABOUT</a></li>
                    <li ng-class="{'active':App.UI.Navbar.getActiveNav('contact')}"><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
                </ul>
                <ul class="navbar-right">
                    <li>
                        <i class="fa fa-search"></i>
                    </li>
                </ul>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
