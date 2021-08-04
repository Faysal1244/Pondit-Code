<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6ffac27c45531fc90943fe25736f800
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pondit\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pondit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6ffac27c45531fc90943fe25736f800::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6ffac27c45531fc90943fe25736f800::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6ffac27c45531fc90943fe25736f800::$classMap;

        }, null, ClassLoader::class);
    }
}
