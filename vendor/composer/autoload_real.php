<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb30f9b1a7d866f2499ad270ba101d1b0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb30f9b1a7d866f2499ad270ba101d1b0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb30f9b1a7d866f2499ad270ba101d1b0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb30f9b1a7d866f2499ad270ba101d1b0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
