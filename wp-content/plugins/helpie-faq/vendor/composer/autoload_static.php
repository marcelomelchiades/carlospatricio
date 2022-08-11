<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c9081b7c897285e60959d234f8379cc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pauple\\Pluginator\\' => 18,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pauple\\Pluginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/pauple/pluginator/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c9081b7c897285e60959d234f8379cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c9081b7c897285e60959d234f8379cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c9081b7c897285e60959d234f8379cc::$classMap;

        }, null, ClassLoader::class);
    }
}