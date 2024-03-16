<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita252e59f27dd5649687b416bf02a726b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita252e59f27dd5649687b416bf02a726b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita252e59f27dd5649687b416bf02a726b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita252e59f27dd5649687b416bf02a726b::$classMap;

        }, null, ClassLoader::class);
    }
}
