<?php

/**
 * Stub for PEAR2_Console_Color.
 * 
 * PHP version 5.3
 *
 * @category Console
 * @package  PEAR2_Console_Color
 * @author   Vasil Rangelov <boen.robot@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version  GIT: $Id$
 * @link     http://pear2.php.net/PEAR2_Console_Color
 */

$isIncluded = count(get_included_files()) > 1;
if ($isIncluded) {
    Phar::mapPhar();
    $pkgDir = 'phar://' . __FILE__ . DIRECTORY_SEPARATOR .
            '@PACKAGE_NAME@-@PACKAGE_VERSION@' . DIRECTORY_SEPARATOR;

    //Set up autoloader
    if (class_exists('PEAR2\Autoload', true)) {
        //Called in this fashion to avoid parse errors on PHP =< 5.3.0
        call_user_func(
            array('PEAR2\Autoload', 'initialize'),
            $pkgDir . DIRECTORY_SEPARATOR . 'src'
        );
    } else {
        include_once $pkgDir . DIRECTORY_SEPARATOR
            . 'src' . DIRECTORY_SEPARATOR
            . 'PEAR2' . DIRECTORY_SEPARATOR
            . 'Autoload.php';
    }

    unset($pkgDir, $isIncluded);
    return;
}

$isNotCli = PHP_SAPI !== 'cli';
if ($isNotCli) {
    header('Content-Type: text/plain;charset=UTF-8');
}
echo "@PACKAGE_NAME@ @PACKAGE_VERSION@\n";

if (version_compare(phpversion(), '5.3.0', '<')) {
    echo "\nThis package requires PHP 5.3.0 or later.";
    exit(1);
}

$missing_extensions = array();
foreach (array('spl') as $ext) {
    if (!extension_loaded($ext)) {
        $missing_extensions[] = $ext;
    }
}
if ($missing_extensions) {
    echo "\nYou must compile PHP with the following extensions enabled:\n",
        implode(', ', $missing_extensions), "\n",
        "or install the necessary extensions for your distribution.\n";
    exit(2);
}

if (extension_loaded('phar')) {
    try {
        $phar = new Phar(__FILE__);
        $sig = $phar->getSignature();
        echo "{$sig['hash_type']} hash: {$sig['hash']}\n";
    } catch (Exception $e) {
        echo <<<HEREDOC
The PHAR extension is available, but was unable to read this PHAR file's hash.
Regardless, you should not be having any trouble using the package by directly
including this file. In the unlikely case that you can't include it
successfully, you can instead extract one of the other archives, and include
its autoloader.

Exception details:
HEREDOC
            . $e . "\n";
    }
} else {
    echo <<<HEREDOC
If you wish to use this package directly from this archive, you need to install
and enable the PHAR extension. Otherwise, you must instead extract this
archive, and include the autoloader.

HEREDOC;
}

if (!$isNotCli) {
    echo <<<HEREDOC

\033[30;42mIf you are reading this on a green background (and black text), then
this terminal supports colors, i.e. this package would actually do good.\033[0m

\033[32;44mIn case your default color is green, here's also a test with a blue
background (and green text).\033[0m

HEREDOC;

    if (substr(PHP_OS, 0, 3) === 'WIN') {
        echo <<<HEREDOC

If above you see something like "[30;42m", you'd need to install ANSICON.
See http://adoxa.hostmyway.net/ansicon/ or https://github.com/adoxa/ansicon.

HEREDOC;
        if (false !== getenv('ANSICON_VER')) {
            echo <<<HEREDOC

The presense of the "ANSICON_VER" environment variable suggests ANSICON is
already installed. If you are seeing "[30;42m" despite that, then ANSICON is
not really installed, and your terminal is only pretending that it is.

HEREDOC;
        }
    }
}

__HALT_COMPILER();