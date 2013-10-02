<?php

/**
 * ColorMapper class for PEAR2_Console_Color
 * Mappping the names of color to your values.
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

/**
 * This class has the possibles values to a Font Color.
 * The percent[n] constants are mappers to %[n] values.
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
class ColorMapper extends Mapper
{
    const BLACK    = 30;
    const RED      = 31;
    const GREEN    = 32;
    const BROWN    = 33;
    const YELLOW   = 33;
    const BLUE     = 34;
    const PURPLE   = 35;
    const MAGENTA  = 35;
    const CYAN     = 36;
    const GREY     = 37;
    const RESET    = 39;
    const PERCENTK = self::BLACK;
    const PERCENTR = self::RED;
    const PERCENTG = self::GREEN;
    const PERCENTY = self::YELLOW;
    const PERCENTB = self::BLUE;
    const PERCENTP = self::PURPLE;
    const PERCENTM = self::MAGENTA;
    const PERCENTC = self::CYAN;
    const PERCENTW = self::GREY;
    const PERCENTN = self::RESET;
}
