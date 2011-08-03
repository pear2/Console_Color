<?php

/**
 * StyleMapper class for PEAR2_Console_Color
 * Mappping the names of Font Style to your values
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/repository/pear2/PEAR2_Console_Color
 */
namespace PEAR2\Console\Color;

class StyleMapper extends ColorMapper
{
	const NORMAL     	= 0;
	const BOLD       	= 1;
	const LIGHT      	= 1;
	const UNDERSCORE 	= 4;
	const UNDERLINE  	= 4;
	const BLINK      	= 5;
	const INVERSE    	= 6;
	const HIDDEN     	= 8;
	const CONCEALED  	= 8;
	public static $percentY = Array(ColorMapper::YELLOW,self::LIGHT);
	public static $percentG	= Array(ColorMapper::GREEN,self::LIGHT);
	public static $percentB	= Array(ColorMapper::BLUE,self::LIGHT);
	public static $percentR	= Array(ColorMapper::RED,self::LIGHT);
	public static $percentP	= Array(ColorMapper::PURPLE,self::LIGHT);
	public static $percentM	= Array(ColorMapper::PURPLE,self::LIGHT);
	public static $percentC	= Array(ColorMapper::CYAN,self::LIGHT);
	public static $percentW	= Array(ColorMapper::GREY,self::LIGHT);
	public static $percentK	= Array(ColorMapper::BLACK,self::LIGHT);
	public static $percentN	= Array(ColorMapper::RESET,self::LIGHT);
}
