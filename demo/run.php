<?php

require_once(dirname(__FILE__) . "/../vendor/autoload.php");

use MinhD\Generator as Generator;

for ($i = 0; $i < 10; $i++){
    echo Generator::dashed()."\n";
}
