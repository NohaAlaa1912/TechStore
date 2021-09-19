<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45a07329f31ece247a45a617556ddc12
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TechStore\\Classes\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TechStore\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45a07329f31ece247a45a617556ddc12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45a07329f31ece247a45a617556ddc12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45a07329f31ece247a45a617556ddc12::$classMap;

        }, null, ClassLoader::class);
    }
}