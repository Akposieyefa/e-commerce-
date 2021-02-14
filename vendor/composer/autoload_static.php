<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3211167a3c826a92a05a2248b69df12
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite3211167a3c826a92a05a2248b69df12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3211167a3c826a92a05a2248b69df12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3211167a3c826a92a05a2248b69df12::$classMap;

        }, null, ClassLoader::class);
    }
}
