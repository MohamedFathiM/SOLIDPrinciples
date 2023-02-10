<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9090471abddae678be8784fab7fb11e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SOLID\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SOLID\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Principles',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9090471abddae678be8784fab7fb11e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9090471abddae678be8784fab7fb11e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9090471abddae678be8784fab7fb11e::$classMap;

        }, null, ClassLoader::class);
    }
}
