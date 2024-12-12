<?php

namespace App\Controllers;

class BranchesController extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('dashboard/branches/index');
    }
}
