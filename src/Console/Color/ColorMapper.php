<?php

/**
 * ColorMapper class for PEAR2_Console_Color
 * Mappping the names of color to your values
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      
 */
namespace PEAR2\Console\Color;
class ColorMapper extends Mapper
{
	const BLACK		= 30;
    const GREEN 	= 32;
    const BROWN  	= 33;
    const RED    	= 31;
    const BLUE   	= 34;
    const PURPLE 	= 35;
    const CYAN   	= 36;
    const GREY   	= 37;
    const YELLOW 	= 33;
    const percenty	= self::YELLOW;
    const percentg	= self::GREEN;
    const percentb	= self::BLUE;
    const percentr	= self::RED;
    const percentp	= self::PURPLE;
    const percentm	= self::PURPLE;
    const percentc	= self::CYAN;
    const percentw	= self::GREY;
    const percentk	= self::BLACK;
    const percentn	= 0;
    const RESET		= 0;
    
}
