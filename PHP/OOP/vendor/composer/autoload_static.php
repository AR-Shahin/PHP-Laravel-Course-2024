<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12686a75f6f133cf1483e7755a9cedac
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NumberToWords\\' => 14,
        ),
        'A' => 
        array (
            'Anisurrahman\\Oop\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NumberToWords\\' => 
        array (
            0 => __DIR__ . '/..' . '/kwn/number-to-words/src',
        ),
        'Anisurrahman\\Oop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit12686a75f6f133cf1483e7755a9cedac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12686a75f6f133cf1483e7755a9cedac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12686a75f6f133cf1483e7755a9cedac::$classMap;

        }, null, ClassLoader::class);
    }
}
