<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: Usercontroller
 * 
 * Automatically generated via CLI.
 */
class Usercontroller extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function user()
    {
        $this->call->view('crud_user');
    }
}