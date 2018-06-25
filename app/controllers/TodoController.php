<?php

namespace App\Controllers;

use App\Core\App;

class TodoController
{
    /**
     * Show all todos.
     */
    public function index()
    {
        $todos = App::get('database')->selectAll('todos');

        return view('todos/index', compact('todos'));
    }
}
