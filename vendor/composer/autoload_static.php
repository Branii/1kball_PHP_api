<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77ec9ffae86a0b94ea9b776ea8db2102
{
    public static $files = array (
        'cfb7c780793bfa1138356bbe97dc66da' => __DIR__ . '/..' . '/leafs/http/src/functions.php',
        '180b7da0070d071a196b2eb06348e080' => __DIR__ . '/..' . '/leafs/cookie/src/functions.php',
        'cd18aec96aea037961c7c777fe0159ab' => __DIR__ . '/..' . '/leafs/leaf/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'L' => 
        array (
            'Leaf\\Http\\' => 10,
            'Leaf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Leaf\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafs/cookie/src',
            1 => __DIR__ . '/..' . '/leafs/http/src',
        ),
        'Leaf\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafs/anchor/src',
            1 => __DIR__ . '/..' . '/leafs/exception/src',
            2 => __DIR__ . '/..' . '/leafs/leaf/src',
            3 => __DIR__ . '/..' . '/leafs/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77ec9ffae86a0b94ea9b776ea8db2102::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77ec9ffae86a0b94ea9b776ea8db2102::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77ec9ffae86a0b94ea9b776ea8db2102::$classMap;

        }, null, ClassLoader::class);
    }
}
