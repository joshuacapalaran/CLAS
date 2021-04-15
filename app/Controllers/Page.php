<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function index()
    {
        	return view('students');
    }
}
