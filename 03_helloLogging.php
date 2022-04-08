
<?php


//setelah menambahkan library baru di composer.json
//jangan lupa gunakan command : composer update untuk mengupdate seluruh dependensinya
//dan melakukan autogenerate : composer dump-autoload 
require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("BelajarComposerAutoloadLibrary");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello World");
$log->info("Selamat Belajar PHP Composer");

//Materi logging akan dibahas pada PHP Logging