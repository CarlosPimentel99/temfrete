<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78a54b66024a165c2db7dcaa648491ff
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit78a54b66024a165c2db7dcaa648491ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78a54b66024a165c2db7dcaa648491ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78a54b66024a165c2db7dcaa648491ff::$classMap;

        }, null, ClassLoader::class);
    }
}