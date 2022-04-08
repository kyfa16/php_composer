<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89612b5b2f5ba59d66f43a58a2589fe2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'ProgrammerZamanNow\\' => 19,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'FandyComposer\\BelajarComposerLibrary\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'ProgrammerZamanNow\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'FandyComposer\\BelajarComposerLibrary\\' => 
        array (
            0 => __DIR__ . '/..' . '/fandy/php_composer_library/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89612b5b2f5ba59d66f43a58a2589fe2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89612b5b2f5ba59d66f43a58a2589fe2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89612b5b2f5ba59d66f43a58a2589fe2::$classMap;

        }, null, ClassLoader::class);
    }
}
