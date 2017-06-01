<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 01/06/2017
 * Time: 16:15
 */

defined('MOODLE_INTERNAL') || die();
$plugin->version = '2016102100';
$plugin->requires = 2016112900.00;
$plugin->component = 'theme_material';
$plugin->dependencies = [
    'theme_boost' => '2016102100'
];
// This is a stable release.
$plugin->maturity = MATURITY_STABLE;
$plugin->release = 1.0;