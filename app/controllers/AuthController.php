<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: AuthController
 * 
 * Automatically generated via CLI.
 */
class AuthController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->library(['form_validation', 'session']);
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $this->request->post('username');
            $password = $this->request->post('password');
            $passconfirm = $this->request->post('passconfirm');
            if (!$this->form_validation->validate([
                'username' => 'required | min_length[5] | max_length[20] | alpha_numeric',
                'password' => 'required | min_length[8] | max_length[20]',
                'passconfirm' => 'required'
            ])) {
                $this->call->view('register');
                return;
            }

            if ($password !== $passconfirm) {
                $this->call->view('register', [
                    'error' => 'Passwords do not match.'
                ]);
                return;
            }

            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            $this->AuthModel->insert([
                'username' => $username,
                'password' => $hashed_password
            ]);

            $this->session->set_flashdata(
                'success',
                'Account created successfully.'
            );

            redirect('/login');
        } else {

            $this->call->view('register');
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $this->request->post('username');
            $password = $this->request->post('password');
            if (empty($username) || empty($password)) {
                $this->call->view('login', [
                    'error' => 'Please enter your username and password.'
                ]);
                return;
            }
            $user = $this->AuthModel->get_by_username($username);
            if ($user && password_verify($password, $user['password'])) {
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('username', $user['username']);

                redirect('/productViews');
                return;
            } else {
                $this->call->view('login', [
                    'error' => 'Invalid username or password.'
                ]);
                return;
            }
        } else {
            $this->call->view('login');
        }
    }
    public function logout()
    {
        session_destroy();

        redirect('/login');
    }
}