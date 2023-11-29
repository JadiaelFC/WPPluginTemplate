<?php

use User\Includes\Activate;
use User\Includes\Deactivate;

defined('ABSPATH') || exit;

final class MainTestIncludes
{
    private $version = "0.1.0";
    private static $instances = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot userialize a singleton.");
    }

    public static function getInstance(): ?MainTestIncludes
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }
        return self::$instances[$cls];
    }

    public function init()
    {
    }

    public function activate()
    {
        Activate::activate();
    }
    
    public function deactivate()
    {
        Deactivate::deactivate();
    }
        
}
