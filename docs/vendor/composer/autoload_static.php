<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit858f82aa2291d6d7208000469920bca9
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'DocxTemplate' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit858f82aa2291d6d7208000469920bca9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}