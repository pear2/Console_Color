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
    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to specify that
     * the font color already in effect should be kept.
     */
    const KEEP    = null;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to black.
     */
    const BLACK   = 30;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to red.
     */
    const RED     = 31;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to green.
     */
    const GREEN   = 32;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to brown/yellow (implementation defined).
     */
    const BROWN   = 33;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to brown/yellow (implementation defined).
     */
    const YELLOW  = 33;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to blue.
     */
    const BLUE    = 34;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to purple/magenta (implementation defined).
     */
    const PURPLE  = 35;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to purple/magenta (implementation defined).
     */
    const MAGENTA = 35;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to cyan.
     */
    const CYAN    = 36;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to grey/white (implementation defined).
     */
    const GREY    = 37;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to grey/white (implementation defined).
     */
    const WHITE   = 37;

    /**
     * Used at {@link \PEAR2\Console\Color::setFont()} to set the
     * font color to whatever the default one is.
     */
    const RESET   = 39;
}
