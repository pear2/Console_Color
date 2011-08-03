<?php

/**
 * ColorMapper class for PEAR2_Console_Color
 * Mappping the names of BackGroundColor to your values
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/repository/pear2/PEAR2_Console_Color
 */
namespace PEAR2\Console\Color;
/**
 * 
 * this class have the possibles values to an Background Color
 * the percent[n] constants are mappers to %[n] values
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 *
 */

class BackgroundMapper extends Mapper
{
	const BLACK  	= 40;
	const RED    	= 41;
	const GREEN  	= 42;
	const BROWN  	= 43;
	const YELLOW 	= 43;
	const BLUE   	= 44;
	const PURPLE 	= 45;
	const CYAN   	= 46;
	const GREY   	= 47;
	const percent3 	=   self::YELLOW;
	const percent2 	=   self::GREEN;
	const percent4 	=   self::BLUE;
	const percent1 	=   self::RED;
	const percent5 	=   self::PURPLE;
	const percent6 	=   self::CYAN;
	const percent7 	=   self::GREY;
	const percent0 	=   self::BLACK;
	
}
