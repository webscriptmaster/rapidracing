<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d6757aad603a5c8608f6b4a1eab8871
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LatePoint\\Cerber\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LatePoint\\Cerber\\' => 
        array (
            0 => __DIR__ . '/..' . '/latepoint/cerber/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d6757aad603a5c8608f6b4a1eab8871::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d6757aad603a5c8608f6b4a1eab8871::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d6757aad603a5c8608f6b4a1eab8871::$classMap;

        }, null, ClassLoader::class);
    }
}
