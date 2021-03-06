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

use Neyo\ErrorHandler;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @class ErrorHandlerTest The error handler test class.
 */
class ErrorHandlerTest extends TestCase
{
    public function testConstructor()
    {
        $this->expectException(RuntimeException::class);
        $errorHandler = new ErrorHandler('UnkownFunction');
    }
}
