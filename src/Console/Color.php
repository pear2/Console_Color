<?php
/**
 * Console\Color\Main
 *
 * PHP version 5
 *
 * @category  Console
 * @package   Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   SVN: $Id$
 * @link
 */

/**
 * Main class for Console_Color
 *
 * @category  Console
 * @package   Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear.php.net/package/Console_Color
 */
namespace PEAR2\Console\Color;
class Color
{
	/**
	 *
	 * add constant values to values retrieved by specific mappers
	 * @param string $value the value form the mappers
	 * @return string the final value to command line
	 * @access private
	 */
	private static function decorateValue($value){
        return "\033[".$value.'m';
	}
	/**
	 *
	 * get the value into mappers
	 * @param string $value the value the user insert in text
	 * @return string
	 * @access private
	 */
	private static function get($value){
		$diff = $value[1];
		if (  filter_var($diff,FILTER_SANITIZE_NUMBER_INT) == $diff )
		{
			$returnvalue = BackgroundMapper::get($value);
		}
		else if ( strtolower($diff) == $diff)
		{
			$returnvalue = ColorMapper::get($value);
		}
		else
		{
			$returnvalue = StyleMapper::get($value);
		}

		if ($returnvalue !== false)
			return $returnvalue;
		else
			throw New \Exception( "Value {$value} not found" );
	}
	/**
	 *
	 * search values into string and replace with mapped values
	 * @param string $string
	 * @access public
	 * @return string
	 */
	public static function convert($string){
		$string = self::sanitize($string);
		$matches = self::getPatterns($string);
		if ( count($matches) ){
			foreach ($matches[0] as $key) {
				$newvalue ="";
				if ( is_array( ($keys=self::get($key)))){
					foreach ($keys as $ikey){
						$newvalue .= self::decorateValue( $ikey ) ;
					}
				}else
		    	$newvalue = self::decorateValue(
			    	 self::get($key)) ;
			    $string = str_replace($key, $newvalue, $string);
			}
		}
		return $string;
	}
}
