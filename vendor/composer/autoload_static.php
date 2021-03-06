<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf972a022f0b1838735ebb87a9dd44ec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf972a022f0b1838735ebb87a9dd44ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf972a022f0b1838735ebb87a9dd44ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf972a022f0b1838735ebb87a9dd44ec::$classMap;

        }, null, ClassLoader::class);
    }
}
