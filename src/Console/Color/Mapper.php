<?php

/**
 * Mapper class for PEAR2_Console_Color
 * the Abstract class used to construct mappers to colors
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/repository/pear2/PEAR2_Console_Color
 */
namespace PEAR2\Console\Color;
abstract class Mapper
{

	public static function get( $name )
	{	
		$name = str_replace('%', 'percent', $name);
		$rColorMapper = New \ReflectionClass( get_called_class() );
		if( ($item=$rColorMapper->getConstant($name) )!==false )
			return $item;
		else if( ($item=$rColorMapper->getProperty($name) )!==false )
			return $item->getValue( get_called_class() );
		else
			return false;		
	}
	
}
