<?php

namespace PEAR2\Console\Color\Test\Derivatives;

use PEAR2\Console\Color\Flags;

abstract class CustomFlagsResolver extends Flags
{
    const HACK = 4;
    public static function fillResolver()
    {
        static::$flagCodes[self::HACK] = 99;
    }
}