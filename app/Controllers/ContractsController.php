<?php

namespace App\Controllers;

class ContractsController extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('dashboard/contracts/index');
    }
}
