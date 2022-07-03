<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf481f06c49a13da5f554f25af9f1f875
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf481f06c49a13da5f554f25af9f1f875::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf481f06c49a13da5f554f25af9f1f875::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf481f06c49a13da5f554f25af9f1f875::$classMap;

        }, null, ClassLoader::class);
    }
}