<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ac4f99291492946f06d2d7fe643c139
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ac4f99291492946f06d2d7fe643c139::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ac4f99291492946f06d2d7fe643c139::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ac4f99291492946f06d2d7fe643c139::$classMap;

        }, null, ClassLoader::class);
    }
}
