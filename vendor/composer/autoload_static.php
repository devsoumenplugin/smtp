<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbe7178fe2d8692fcfb858592d6d4567
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bera\\Smtp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bera\\Smtp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbe7178fe2d8692fcfb858592d6d4567::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbe7178fe2d8692fcfb858592d6d4567::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
