<?php

namespace App\Controllers;

class AcManagementController extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('guest/accountmanagement/index');
    }
}
