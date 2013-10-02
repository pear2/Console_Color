<?php
/**
 * Main class for Console_Color
 *
 * PHP version 5.3
 *
 * @category  Console
 * @package   Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   GIT: $Id$
 * @link      http://pear.php.net/package/Console_Color
 */
namespace PEAR2\Console;

use PEAR2\Console\Color\BackgroundMapper;
use PEAR2\Console\Color\ColorMapper;
use PEAR2\Console\Color\UnexpectedValueException;
use PEAR2\Console\Color\StyleMapper;

/**
 * Main class for Console_Color.
 *
 * @category  Console
 * @package   Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
class Color
{
    /**
     * Add constant values to values retrieved by specific mappers.
     * 
     * @param string $value the value form the mappers
     * 
     * @return string the final value to command line
     */
    private static function _decorateValue($value)
    {
        return "\033[{$value}m";
    }
    /**
     * Get the value into mappers
     * 
     * @param string $value the value the user insert in text
     * 
     * @return string
     */
    private static function _get($value)
    {
        $diff = $value[1];
        if (filter_var($diff, FILTER_SANITIZE_NUMBER_INT) == $diff) {
            $returnvalue = BackgroundMapper::get($value);
        } elseif (strtolower($diff) == $diff) {
            $returnvalue = ColorMapper::get($value);
        } else {
            $returnvalue = StyleMapper::get($value);
        }

        if ($returnvalue !== false) {
            return $returnvalue;
        } else {
            throw new UnexpectedValueException("Value '{$value}' not found");
        }
    }
    /**
     * Search values into string and replace with mapped values.
     * 
     * @param string $string The value to search for.
     * 
     * @return string The mapped value.
     */
    public static function convert($string)
    {
        $string = self::sanitize($string);
        $matches = self::getPatterns($string);
        if (count($matches)) {
            foreach ($matches[0] as $key) {
                $newvalue ="";
                if (is_array(($keys = self::_get($key)))) {
                    foreach ($keys as $ikey) {
                        $newvalue .= self::_decorateValue($ikey);
                    }
                } else {
                    $newvalue = self::_decorateValue(self::_get($key));
                }
                $string = str_replace($key, $newvalue, $string);
            }
        }
        return $string;
    }
}
