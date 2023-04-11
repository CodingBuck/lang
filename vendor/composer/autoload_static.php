<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbedbcb9c1a1f5670e3f6cdf1ad958d82
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbedbcb9c1a1f5670e3f6cdf1ad958d82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbedbcb9c1a1f5670e3f6cdf1ad958d82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbedbcb9c1a1f5670e3f6cdf1ad958d82::$classMap;

        }, null, ClassLoader::class);
    }
}
