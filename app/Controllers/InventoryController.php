<?php

namespace App\Controllers;

class InventoryController extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('dashboard/inventroy/index');
    }
}
