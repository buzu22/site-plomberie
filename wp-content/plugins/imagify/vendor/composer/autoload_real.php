<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4fff6e59f3e5ad878e4b5bf99ef89f0a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\AutoloadWPMediaImagifyWordPressPlugin\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\AutoloadWPMediaImagifyWordPressPlugin\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit4fff6e59f3e5ad878e4b5bf99ef89f0a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\AutoloadWPMediaImagifyWordPressPlugin\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4fff6e59f3e5ad878e4b5bf99ef89f0a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4fff6e59f3e5ad878e4b5bf99ef89f0a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}