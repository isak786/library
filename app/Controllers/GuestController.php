<?php

namespace App\Controllers;

class GuestController extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('guest/index');
    }
}
