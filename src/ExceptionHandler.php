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

namespace Neyo;

use RuntimeException;
use function function_exists;
use function trim;

/**
 * @class      ExceptionHandler          The exception handler.
 * @implements ExceptionHandlerInterface The exception handler interface.
 */
class ExceptionHandler implements ExceptionHandlerInterface
{
    /**
     * @var string The function name.
     */
    private $callableFunction;

    /**
     * Initialize a new exception handler.
     *
     * @param string $passableFunction The function name.
     *
     * @throws RuntimeException If the function does not exists.
     *
     * @return void Returns nothing.
     */
    public function __construct(string $passableFunction = '')
    {
        $passableFunction = trim($passableFunction);
        // An error handler function is provided.
        if (function_exists($passableFunction)) {
            $this->callableFunction = $passableFunction;
        } else {
            throw new RuntimeException('The function does not exists.');
        }
    }

    /**
     * Return the error handler function.
     *
     * @return mixed The error handler function
     */
    public function getCallable()
    {
        $func = $this->callableFunction;

        return $func;
    }
}
