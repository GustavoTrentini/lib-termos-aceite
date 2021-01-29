<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d7547513142b99d56ae6a9a3977b0e0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ApplySystem\\TermosAceite\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ApplySystem\\TermosAceite\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d7547513142b99d56ae6a9a3977b0e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d7547513142b99d56ae6a9a3977b0e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d7547513142b99d56ae6a9a3977b0e0::$classMap;

        }, null, ClassLoader::class);
    }
}