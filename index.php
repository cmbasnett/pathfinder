<?php

$f3 = require('app/lib/base.php');

// load configuration
$f3->config('app/config.cfg');

// load routes
$f3->config('app/routes.cfg');
//print_r($f3);
$f3->run();
