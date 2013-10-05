<?php

/**
 * Flags class for PEAR2_Console_Color
 * Mappping the names of Font Style to your values.
 * 
 * PHP version 5.3
 *
 * @category Console
 * @package  PEAR2_Console_Color
 * @author   Vasil Rangelov <boen.robot@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version  GIT: $Id$
 * @link     http://pear2.php.net/PEAR2_Console_Color
 */
namespace PEAR2\Console\Color;

use ReflectionClass;

/**
 * This class has the possibles flags to a color setting.
 * 
 * @category Console
 * @package  PEAR2_Console_Color
 * @author   Vasil Rangelov <boen.robot@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link     http://pear2.php.net/PEAR2_Console_Color
 */
abstract class Flags
{
    const NONE    = 0;
    const RESET   = 1;
    const INVERSE = 2;

    /**
     * @var int[] Array with the flag as a key, and the corresponding code as a
     *     value.
     */
    protected static $flagCodes = array(
        self::RESET   => 0,
        self::INVERSE => 7
    );

    /**
     * Gets the codes for a flag set.
     * 
     * @param int $flags The flags to get the codes for.
     * 
     * @return int[] The codes for the flags specified, in ascending order,
     *     based on the flag constants' values.
     */
    final public static function getCodes($flags)
    {
        if (self::NONE === $flags) {
            return array();
        }

        $result = array();
        $flagsClass = new ReflectionClass(get_called_class());
        $validFlags = array_values(
            array_unique($flagsClass->getConstants(), SORT_NUMERIC)
        );
        foreach ($validFlags as $flag) {
            if (($flags & $flag) !== 0) {
                $result[] = static::$flagCodes[$flag];
            }
        }
        return $result;
    }
}
