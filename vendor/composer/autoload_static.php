<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc2cf14d8de8d9d72ff22492e09d8629
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '72142d7b40a3a0b14e91825290b5ad82' => __DIR__ . '/..' . '/cakephp/core/functions.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '948ad5488880985ff1c06721a4e447fe' => __DIR__ . '/..' . '/cakephp/utility/bootstrap.php',
        '028fdea3165c4ba1ecccc83b7fec69fc' => __DIR__ . '/..' . '/cakephp/collection/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
            'SONFin\\' => 7,
        ),
        'P' => 
        array (
            'Phinx\\' => 6,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'Cake\\Utility\\' => 13,
            'Cake\\Datasource\\' => 16,
            'Cake\\Database\\' => 14,
            'Cake\\Core\\' => 10,
            'Cake\\Collection\\' => 16,
            'Cake\\Cache\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'SONFin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Phinx\\' => 
        array (
            0 => __DIR__ . '/..' . '/robmorgan/phinx/src/Phinx',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'Cake\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/utility',
        ),
        'Cake\\Datasource\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/datasource',
        ),
        'Cake\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/database',
        ),
        'Cake\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/core',
        ),
        'Cake\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/collection',
        ),
        'Cake\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/cache',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc2cf14d8de8d9d72ff22492e09d8629::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc2cf14d8de8d9d72ff22492e09d8629::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
