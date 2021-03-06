<?php

declare(strict_types=1);
/**
 * Neyo PHP Framework.
 *
 * @author @ikorisabi <ikorisabi@gmail.com>.
 * @license <https://github.com/neyo-php-framework/debugger/blob/master/LICENSE> GNU General Public License v3.0.
 *
 * @link    <https://github.com/neyo-php-framework/debugger>                     Source Code.
 */

namespace Neyo\Tests;

use Neyo\Debugger;
use Neyo\ErrorHandler;
use Neyo\ExceptionHandler;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;
use const true;

/**
 * @class DebuggerTest The debugger test class.
 */
class DebuggerTest extends TestCase
{
    public function testConstructor()
    {
        $errorHandler = new ErrorHandler('testErrorHandler');
        $exceptionHandler = new ExceptionHandler('testExceptionHandler');
        $debugger = new Debugger($errorHandler, $exceptionHandler);
        $this->assertTrue(true);
        $debugger->run('production');
        $this->assertTrue(Debugger::isProductionMode());
        $this->assertTrue(!Debugger::isDevelopmentMode());
        $debugger->run('development');
        $this->assertTrue(!Debugger::isProductionMode());
        $this->assertTrue(Debugger::isDevelopmentMode());
        $this->assertTrue(true);
    }

    public function testUnexpectedException()
    {
        $this->expectException(UnexpectedValueException::class);
        $errorHandler = new ErrorHandler('testErrorHandler');
        $exceptionHandler = new ExceptionHandler('testExceptionHandler');
        $debugger = new Debugger($errorHandler, $exceptionHandler);
        $debugger->run('testUnknownMode');
    }
}
