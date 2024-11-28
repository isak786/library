<?php

namespace App\Controllers;

class BranchLibrarian extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('branchlibrarian/index');
    }
}
