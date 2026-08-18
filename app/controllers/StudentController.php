<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentController
 * 
 * Automatically generated via CLI.
 */
class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $this->call->view('student_page');

    }

    public function profile()
    {   
        $student = [
            'student_id' => 'MCC2024-00220',
            'name' => 'Angel Mae V. Pangilinan',
            'school' => 'Mindoro State University-Calapan Campus',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'III-F5',
            'contact' => '0918-384-1328',
            'email' => 'pangilinanangelmae01@gmail.com',
            'address' => 'Brgy. Sta. Rita, Calapan City, Oriental Mindoro',
            'hobby' => 'Cooking, Travelling, Discovering new things, and Exploring new places',
            'socmed' => 'https://www.facebook.com/pangilinan1001'
        ];
        $this->call->view('student_profile', [
            'student' => $student
        ]);
    }
}