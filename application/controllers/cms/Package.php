<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/09
 * Time: 10:55 PM
 */

class Package extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_info()
    {
        $package = new stdClass();
        $package->title = 'Package title';
        $package->price = '31 995';
        $package->country = 'Austria';
        $package->duration = 7;
        $package->tags = array('Flights', 'Hosted', 'All inclusive', 'Ski pass');
        $package->inclusions = '';
        $package->exclusions = '';
        $package->resort_name = 'Resort name here';

        $similar_package_1 = new stdClass();
        $similar_package_2 = new stdClass();

        $package->similar_packages = array(
            0 => $similar_package_1,
            1 => $similar_package_2,
        );

        $this->responder->as_json(array(
            'package' => $package,
        ));
    }
}
