<?php

/**
 * ColorMapper class for PEAR2_Console_Color
 * Mappping the names of BackGroundColor to your values.
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
 * This class have the possibles values to a Background Color
 * the percent[n] constants are mappers to %[n] values
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
class BackgroundMapper extends Mapper
{
    const BLACK    = 40;
    const RED      = 41;
    const GREEN    = 42;
    const BROWN    = 43;
    const YELLOW   = 43;
    const BLUE     = 44;
    const PURPLE   = 45;
    const MAGENTA  = 45;
    const CYAN     = 46;
    const GREY     = 47;
    const RESET    = 49;
    const PERCENT0 = self::BLACK;
    const PERCENT1 = self::RED;
    const PERCENT2 = self::GREEN;
    const PERCENT3 = self::YELLOW;
    const PERCENT4 = self::BLUE;
    const PERCENT5 = self::PURPLE;
    const PERCENT6 = self::CYAN;
    const PERCENT7 = self::GREY;
    const PERCENT9 = self::RESET;
}
