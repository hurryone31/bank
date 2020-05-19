<?php
$loader = require __DIR__.'/../../../vendor/autoload.php';
$loader->add('common', __DIR__.'/../../../src');

use common\SmallCalc\SmallCalc;

$calc = new SmallCalc(file_get_contents('php://input'));
$calc->loadResult();
