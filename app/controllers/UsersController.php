<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UsersController extends Controller {
    public function show_users() {
        $users = $this->UsersModel->all();
        $this->call->view('users', ['users' => $users]);
    }  
}
