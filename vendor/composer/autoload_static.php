<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f0c7ee08c81bfcebd8450a82503782f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Requirements\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Requirements\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/requirements-checker/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f0c7ee08c81bfcebd8450a82503782f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f0c7ee08c81bfcebd8450a82503782f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f0c7ee08c81bfcebd8450a82503782f::$classMap;

        }, null, ClassLoader::class);
    }
}