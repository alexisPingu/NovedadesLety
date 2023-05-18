<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita32f879fd684f5d65064e8b8f73b18d3
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'novedadeslety\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'novedadeslety\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita32f879fd684f5d65064e8b8f73b18d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita32f879fd684f5d65064e8b8f73b18d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita32f879fd684f5d65064e8b8f73b18d3::$classMap;

        }, null, ClassLoader::class);
    }
}
