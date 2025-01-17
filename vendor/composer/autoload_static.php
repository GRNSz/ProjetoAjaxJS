<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19404c8aa6ab44cd6be32c5256679791
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Guszn\\ProjetoAjax\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Guszn\\ProjetoAjax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19404c8aa6ab44cd6be32c5256679791::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19404c8aa6ab44cd6be32c5256679791::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19404c8aa6ab44cd6be32c5256679791::$classMap;

        }, null, ClassLoader::class);
    }
}
