<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4a389f780ae92519d504e2da5bd0d1f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4a389f780ae92519d504e2da5bd0d1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4a389f780ae92519d504e2da5bd0d1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4a389f780ae92519d504e2da5bd0d1f::$classMap;

        }, null, ClassLoader::class);
    }
}
