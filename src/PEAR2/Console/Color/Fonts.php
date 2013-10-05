<?php

/**
 * Font class for PEAR2_Console_Color
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
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
abstract class Fonts
{
    const KEEP    = null;
    const BLACK   = 30;
    const RED     = 31;
    const GREEN   = 32;
    const BROWN   = 33;
    const YELLOW  = 33;
    const BLUE    = 34;
    const PURPLE  = 35;
    const MAGENTA = 35;
    const CYAN    = 36;
    const GREY    = 37;
    const WHITE   = 37;
    const RESET   = 39;
}
