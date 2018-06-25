<?php

namespace App\Controllers;

use App\Core\App;

class HomeController
{
    /**
     * Displays the home page.
     */
    public function index()
    {
        return view('index');
    }

}
