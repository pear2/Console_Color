<?php

namespace PEAR2\Console\Color\Test\Derivatives;

use PEAR2\Console\Color\Styles;

abstract class CustomStylesResolver extends Styles
{
    const HACK = 16;
    public static function fillResolver()
    {
        static::$styleCodes[self::HACK] = array(77, 88);
    }
}