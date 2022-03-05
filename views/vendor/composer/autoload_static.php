<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb7321f2e51db851d9439350274db9dd
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb7321f2e51db851d9439350274db9dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb7321f2e51db851d9439350274db9dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb7321f2e51db851d9439350274db9dd::$classMap;

        }, null, ClassLoader::class);
    }
}