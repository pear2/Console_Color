<?php

/**
 * Styles class for PEAR2_Console_Color.
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
 * This class has the possibles values to a Font Style.
 * 
 * @category Console
 * @package  PEAR2_Console_Color
 * @author   Vasil Rangelov <boen.robot@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link     http://pear2.php.net/PEAR2_Console_Color
 */
abstract class Styles
{
    const ALL       = null;
    const BOLD      = 1;
    const UNDERLINE = 2;
    const BLINK     = 4;
    const CONCEALED = 8;

    /**
     * @var (int[])[] An array describing the codes for the styles.
     *     Each array key is the style's constant, and each value is an array
     *     where the first member is the disable code, and the second is the
     *     enable code.
     */
    protected static $styleCodes = array(
        self::BOLD      => array(22, 1),
        self::UNDERLINE => array(24, 4),
        self::BLINK     => array(25, 5),
        self::CONCEALED => array(28, 8)
    );

    /**
     * Get style constants.
     * 
     * @param int|null $styles Bitmask of styles to match.
     *     You can also use {@link self::ALL} (only) to get all styles.
     * 
     * @return int[] Matching style constants.
     */
    final public static function match($styles)
    {
        $flagsClass = new ReflectionClass(get_called_class());
        $validStyles = array_values(
            array_unique($flagsClass->getConstants(), SORT_NUMERIC)
        );
        unset($validStyles[array_search(self::ALL, $validStyles, true)]);
        
        if (self::ALL === $styles) {
            return $validStyles;
        }
        $styles = (int)$styles;

        $result = array();
        foreach ($validStyles as $flag) {
            if (($styles & $flag) !== 0) {
                $result[] = $flag;
            }
        }
        return $result;
    }

    /**
     * Gets the code for a style.
     * 
     * @param int  $style The style to get the code for.
     * @param bool $state The state to get code for.
     *     TRUE for the enabled state codes,
     *     FALSE for the disabled state codes.
     * 
     * @return int The code for the flag specified.
     */
    final public static function getCode($style, $state)
    {
        return static::$styleCodes[$style][(int)(bool)$state];
    }
}
