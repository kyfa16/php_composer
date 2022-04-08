<?php

use FandyComposer\BelajarComposerLibrary\Customer;

require_once __DIR__ . "/vendor/autoload.php";


$person = new Customer("Fandy");
echo $person->sayHello("Fafito"). PHP_EOL;

$person2 = new Customer();
echo $person2->sayHello("Fafito"). PHP_EOL;
