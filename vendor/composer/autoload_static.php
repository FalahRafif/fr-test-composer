<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit432846cd7efa1f1c605821295bed5b6e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit432846cd7efa1f1c605821295bed5b6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit432846cd7efa1f1c605821295bed5b6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit432846cd7efa1f1c605821295bed5b6e::$classMap;

        }, null, ClassLoader::class);
    }
}
