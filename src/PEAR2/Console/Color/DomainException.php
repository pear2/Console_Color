<?php

/**
 * DomainException class for PEAR2_Console_Color.
 * 
 * PHP version 5.3
 *
 * @category Console
 * @package  PEAR2_Console_Color
 * @author   Vasil Rangelov <boen.robot@gmail.com>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @version  GIT: $Id$
 * @link     http://pear2.php.net/PEAR2_Console_Color
 */
namespace PEAR2\Console\Color;

use DomainException as D;

/**
 * Exception class for PEAR2_Console_Color.
 *
 * @category  Console
 * @package   PEAR2_Console_Color
 * @author    Vasil Rangelov <boen.robot@gmail.com>
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @link      http://pear2.php.net/PEAR2_Console_Color
 */
class DomainException extends D implements Exception
{
    /**
     * Used when an invalid flags resolver is supplied.
     */
    const CODE_FLAGS  = 1;

    /**
     * Used when an invalid styles resolver is supplied.
     */
    const CODE_STYLES = 2;
}
