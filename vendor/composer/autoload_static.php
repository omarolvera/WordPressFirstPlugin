<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6e711c44bb84d5ec9b639ffa3028ccf
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6e711c44bb84d5ec9b639ffa3028ccf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6e711c44bb84d5ec9b639ffa3028ccf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}