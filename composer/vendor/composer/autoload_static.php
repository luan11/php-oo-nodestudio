<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd97125950483e3702bad634830b9580a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd97125950483e3702bad634830b9580a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd97125950483e3702bad634830b9580a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
