<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb12f3b85763a3fd933bad5de149645e
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vikoder\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vikoder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb12f3b85763a3fd933bad5de149645e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb12f3b85763a3fd933bad5de149645e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
