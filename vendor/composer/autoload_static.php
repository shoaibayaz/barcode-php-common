<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c044aec3a20928c9adc174f2de5198a
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BarcodeBakery\\Common\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BarcodeBakery\\Common\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c044aec3a20928c9adc174f2de5198a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c044aec3a20928c9adc174f2de5198a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c044aec3a20928c9adc174f2de5198a::$classMap;

        }, null, ClassLoader::class);
    }
}
