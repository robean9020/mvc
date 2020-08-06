<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e291502a6fa1972474f1f0d1906a91b
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'myvendor\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'myvendor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e291502a6fa1972474f1f0d1906a91b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e291502a6fa1972474f1f0d1906a91b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
