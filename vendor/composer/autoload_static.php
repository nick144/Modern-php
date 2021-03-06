<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit304a9302616a6d9d64c042630dc29b78
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Routing\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Routing\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Routing',
        ),
    );

    public static $classMap = array (
        'Routing\\Controller\\About' => __DIR__ . '/../..' . '/app/Routing/Controller/About.php',
        'Routing\\Controller\\Contact' => __DIR__ . '/../..' . '/app/Routing/Controller/Contact.php',
        'Routing\\Controller\\Home' => __DIR__ . '/../..' . '/app/Routing/Controller/Home.php',
        'Routing\\Model\\User' => __DIR__ . '/../..' . '/app/Routing/Model/User.php',
        'Routing\\lib\\Route' => __DIR__ . '/../..' . '/app/Routing/lib/Route.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit304a9302616a6d9d64c042630dc29b78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit304a9302616a6d9d64c042630dc29b78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit304a9302616a6d9d64c042630dc29b78::$classMap;

        }, null, ClassLoader::class);
    }
}
