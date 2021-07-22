<?php

namespace Ns\lib;

/**
 * Ephemeral KeyValue storage
 */

class EphemeralKV
{

    private static $_instance = null;
    public $storage = [];

    /**
     * @param string $key
     * @param string $val
     * @return void
     */
    public static function set($key, $val)
    {
        if (self::$_instance == null) {
            self::$_instance = new EphemeralKV();
        }

        self::$_instance->storage[$key] = $val;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        if (self::$_instance == null) {
            self::$_instance = new EphemeralKV();
        }

        return isset(self::$_instance->storage[$key]) ? self::$_instance->storage[$key] : null;
    }
}
