<?php

namespace PEAR2\Console\Color\Test\Derivatives;

use PEAR2\Console\Color;
use PEAR2\Console\Color\Backgrounds;
use PEAR2\Console\Color\Fonts;
use PEAR2\Console\Color\Flags;

class InvalidFlags extends Color
{
    public function __construct(
        $font = Fonts::KEEP,
        $background = Backgrounds::KEEP,
        $flags = Flags::NONE
    ) {
        parent::__construct($font, $background, $flags);
        static::setFlagsResolver('PHPUnit\Framework\TestCase');
    }
}
