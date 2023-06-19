<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c14c7b50c43024fe770d4e90cfab134
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c14c7b50c43024fe770d4e90cfab134::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c14c7b50c43024fe770d4e90cfab134::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c14c7b50c43024fe770d4e90cfab134::$classMap;

        }, null, ClassLoader::class);
    }
}
