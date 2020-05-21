<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleClass extends Model
{
    private static $s_instance = null;
    private function __construct() {
        //echo "In constructor ". __CLASS__ ."</br>";
    }
    function __destruct() {
        //print "Уничтожается " . __CLASS__  . "\n";
    }
    static function instance() {
        if (!self::$s_instance) {
            self::$s_instance = new static;
        }
        return self::$s_instance;
    }
}
