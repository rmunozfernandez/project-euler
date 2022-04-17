<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77451ef733fb7cd6751645f950ec3c0d
{
    public static $files = array (
        'c59443d3f84cba13d2ac10e2754b813f' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exercice012\\' => 12,
            'Exercice011\\' => 12,
            'Exercice010\\' => 12,
            'Exercice009\\' => 12,
            'Exercice008\\' => 12,
            'Exercice007\\' => 12,
            'Exercice006\\' => 12,
            'Exercice005\\' => 12,
            'Exercice004\\' => 12,
            'Exercice003\\' => 12,
            'Exercice002\\' => 12,
            'Exercice001\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exercice012\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/012-problem',
        ),
        'Exercice011\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/011-problem',
        ),
        'Exercice010\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/010-problem',
        ),
        'Exercice009\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/009-problem',
        ),
        'Exercice008\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/008-problem',
        ),
        'Exercice007\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/007-problem',
        ),
        'Exercice006\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/006-problem',
        ),
        'Exercice005\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/005-problem',
        ),
        'Exercice004\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/004-problem',
        ),
        'Exercice003\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/003-problem',
        ),
        'Exercice002\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/002-problem',
        ),
        'Exercice001\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/001-problem',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77451ef733fb7cd6751645f950ec3c0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77451ef733fb7cd6751645f950ec3c0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77451ef733fb7cd6751645f950ec3c0d::$classMap;

        }, null, ClassLoader::class);
    }
}
