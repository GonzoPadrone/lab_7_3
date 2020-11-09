<?php

namespace Egor;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{
    // выводит fact
    public function _write()
    {
        foreach ($this->log as $g) {
            echo $g ."\r\n";
        }
    }

    //только стринг и мас
    public static function log($str)
    {
        self::Instance()->log[] = $str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}