 <?php

$router->get('', 'PagesController@home');

$router->get('todos', 'TodoController@index');
