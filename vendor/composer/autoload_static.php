<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit326ce4e53a386d8b27fca6959f8f7773
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Admin\\Admin' => __DIR__ . '/../..' . '/App/Controllers/Admin/Admin.php',
        'App\\Controllers\\Admin\\Dashboard' => __DIR__ . '/../..' . '/App/Controllers/Admin/Dashboard.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/App/Controllers/Controller.php',
        'App\\Controllers\\Public\\About' => __DIR__ . '/../..' . '/App/Controllers/Public/About.php',
        'App\\Controllers\\Public\\Error' => __DIR__ . '/../..' . '/App/Controllers/Public/Error.php',
        'App\\Controllers\\Public\\Gallery' => __DIR__ . '/../..' . '/App/Controllers/Public/Gallery.php',
        'App\\Controllers\\Public\\Main' => __DIR__ . '/../..' . '/App/Controllers/Public/Main.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'App\\Core\\Viewer' => __DIR__ . '/../..' . '/App/Core/Viewer.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit326ce4e53a386d8b27fca6959f8f7773::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit326ce4e53a386d8b27fca6959f8f7773::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit326ce4e53a386d8b27fca6959f8f7773::$classMap;

        }, null, ClassLoader::class);
    }
}
