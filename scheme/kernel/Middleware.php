<?php
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @since Version 4
 * @link https://github.com/ronmarasigan/LavaLust
 * @license https://opensource.org/licenses/MIT MIT License
 */

/**
* ------------------------------------------------------
*  Class Middleware
* ------------------------------------------------------
 */
class Middleware
{
    protected $map = [];

    public function __construct()
    {
        // Load middleware configuration
        $middleware_config = APP_DIR . 'config/middleware.php';

        if (!file_exists($middleware_config)) {
            throw new RuntimeException('Middleware config file not found.');
        }

        // This creates $config['middlewares']
        require $middleware_config;

        if (!isset($config['middlewares'])) {
            throw new RuntimeException('Middleware config not found.');
        }

        foreach ($config['middlewares'] as $name => $middleware) {

            // Example:
            // $name = student
            // $middleware = StudentMiddleware

            $file = APP_DIR . 'middlewares/' . $middleware . '.php';

            if (!file_exists($file)) {
                throw new RuntimeException(
                    "Middleware file {$middleware}.php not found."
                );
            }

            require_once $file;

            if (!class_exists($middleware)) {
                throw new RuntimeException(
                    "Middleware class {$middleware} not found."
                );
            }

            $this->map[$name] = new $middleware();
        }
    }

    public function run(array $middlewares, Closure $destination)
    {
        $pipeline = array_reduce(
            array_reverse($middlewares),
            function ($next, $middleware) {
                return function () use ($middleware, $next) {
                    return $this->resolve($middleware, $next);
                };
            },
            $destination
        );

        return $pipeline();
    }

    protected function resolve($middleware, $next)
    {
        if (!isset($this->map[$middleware])) {
            throw new Exception(
                "Middleware [$middleware] not registered."
            );
        }

        return $this->map[$middleware]->handle($next);
    }
}