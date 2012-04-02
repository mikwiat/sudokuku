<?php

/**
 * PSR-0 Namespaced Autoloader
 *
 * @author pjot
 */
abstract class Autoloader {
    final public static function load($className)
    {
        $fileName = sprintf('%s/Classes/%s.php', ROOT, str_replace('\\', '/', $className));
        if (file_exists($fileName))
        {
            require($fileName);
            return true;
        }
        return false;
    }
}
spl_autoload_register('Autoloader::load');