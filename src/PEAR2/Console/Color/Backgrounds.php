<?php

/**
 * Backgrounds class for PEAR2_Console_Color.
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
 * This class has the possibles values to a Background Color.
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
abstract class Backgrounds
{
    const KEEP    = null;
    const BLACK   = 40;
    const RED     = 41;
    const GREEN   = 42;
    const BROWN   = 43;
    const YELLOW  = 43;
    const BLUE    = 44;
    const PURPLE  = 45;
    const MAGENTA = 45;
    const CYAN    = 46;
    const GREY    = 47;
    const WHITE   = 47;
    const RESET   = 49;
}
