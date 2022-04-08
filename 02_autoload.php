<?php

//kita juga dapat memasukkan library yang kita ingin kan kedalam autoload
//sehingga kita tidak perlu menambahkan require untuk seluruh file yang ingin kita import

//cara nya dengan menambahkan autoload pada composer.json
//    "autoload": {
//    "psr-4": {
//        "ProgrammerZamanNow\\" : "src/"
//          }
//     }
// ProgrammerZamanNow merupakan nama namespace dan src/ adalah lokasi file yang ingin di include


//Note :
//setelah menambahkan autoload pada composer pastikan bahwa autoload php sudah digenerate ulang
//kode diterminal :
//composer dump-autoload


require_once __DIR__ . "/vendor/autoload.php";

use ProgrammerZamanNow\Data\People;

$person = new People("Fandy");
echo $person->sayHello("Fito!!!") . PHP_EOL;



