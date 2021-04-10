<?php

require_once __DIR__ . '/../vendor/autoload.php';

$zach = new App\Wcs\Hello();
echo $zach->talk();