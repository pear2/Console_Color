<?php

/**
 * StyleMapper class for PEAR2_Console_Color
 * Mappping the names of Font Style to your values.
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
 * This class has the possibles values to a Font Style
 * the percent[n] constants / property are mappers to %[n] values.
 * 
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
class StyleMapper extends Mapper
{
    const NORMAL            = 0;
    const BOLD              = 1;
    const LIGHT             = 1;
    const UNDERSCORE        = 4;
    const UNDERLINE         = 4;
    const BLINK             = 5;
    const INVERSE           = 6;
    const HIDDEN            = 8;
    const CONCEALED         = 8;
    const BOLD_OFF          = 22;
    const LIGHT_OFF         = 22;
    const UNDERSCORE_OFF    = 24;
    const UNDERLINE_OFF     = 24;
    const BLINK_OFF         = 25;
    public static $PERCENTY = array(ColorMapper::YELLOW, self::LIGHT);
    public static $PERCENTG = array(ColorMapper::GREEN, self::LIGHT);
    public static $PERCENTB = array(ColorMapper::BLUE, self::LIGHT);
    public static $PERCENTR = array(ColorMapper::RED, self::LIGHT);
    public static $PERCENTP = array(ColorMapper::PURPLE, self::LIGHT);
    public static $PERCENTM = array(ColorMapper::PURPLE, self::LIGHT);
    public static $PERCENTC = array(ColorMapper::CYAN, self::LIGHT);
    public static $PERCENTW = array(ColorMapper::GREY, self::LIGHT);
    public static $PERCENTK = array(ColorMapper::BLACK, self::LIGHT);
    public static $PERCENTN = array(ColorMapper::RESET, self::LIGHT);
}
