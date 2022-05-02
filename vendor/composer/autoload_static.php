<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8791b97183e776e7b8278bd4abc2bec
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8791b97183e776e7b8278bd4abc2bec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8791b97183e776e7b8278bd4abc2bec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8791b97183e776e7b8278bd4abc2bec::$classMap;

        }, null, ClassLoader::class);
    }
}
