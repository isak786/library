<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('index');
    }
}
