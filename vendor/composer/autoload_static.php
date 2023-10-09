<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6453b68c72ab34d043a41510b2f9223a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6453b68c72ab34d043a41510b2f9223a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6453b68c72ab34d043a41510b2f9223a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6453b68c72ab34d043a41510b2f9223a::$classMap;

        }, null, ClassLoader::class);
    }
}
