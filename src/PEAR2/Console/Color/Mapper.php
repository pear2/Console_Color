<?php

/**
 * Mapper class for PEAR2_Console_Color
 * the Abstract class used to construct mappers to colors.
 * 
 * PHP version 5.3
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   GIT: $Id$
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
namespace PEAR2\Console\Color;

use ReflectionClass;

/**
 * A mapper to use into concrete mappers.
 * 
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
abstract class Mapper
{
    /**
     * This function look into mapper class to search for values.
     * 
     * @param string $name the value user insert in text
     * 
     * @return string
     */
    public static function get($name)
    {
        $name = str_replace('%', 'PERCENT', $name);
        $rColorMapper = new ReflectionClass(get_called_class());
        if (($item = $rColorMapper->getConstant($name)) !== false) {
            return $item;
        } elseif (($item = $rColorMapper->getProperty($name)) !== false) {
            return $item->getValue(get_called_class());
        } else {
            return false;
        }
    }
}
