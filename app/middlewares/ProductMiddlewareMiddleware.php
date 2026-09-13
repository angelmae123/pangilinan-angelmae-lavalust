<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: ProductMiddlewareMiddleware
 * 
 * Automatically generated via CLI.
 */
    class ProductMiddlewareMiddleware
    {
        public function handle(Closure $next)
        {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Check if user is logged in
            if (!isset($_SESSION['user_id'])) {
                redirect('/login');
                exit;
            }
            return $next();
        }
    }