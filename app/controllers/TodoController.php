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

    /**
     * Store a new todo in the database.
     */
    public function store()
    {
        App::get('database')->insert('todos', [
            'description' => $_POST['description']
        ]);

        return redirect('todos');
    }
}
