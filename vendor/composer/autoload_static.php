<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96b6e8a280f9751d690bb1a51f971480
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96b6e8a280f9751d690bb1a51f971480::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96b6e8a280f9751d690bb1a51f971480::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
