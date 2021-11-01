<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;

class TesteController extends Controller
{
    public function hello($params)
    {
        return "Olá, {$params[1]}";
    }

    public function listUsers()
    {
        return $this->_view->renderTemplate('/teste/index', /* ['users' => User::all()] */  ['users' => ['Francisco', 'Reinaldo', 'Joana'] ]);
        //return User::all();
    }
}