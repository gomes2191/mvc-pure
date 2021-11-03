<?php

namespace Users\Controllers;

use App\Models\User;
use Core\Controller;

class UserController extends Controller
{
    public function hello($params)
    {
        return "Olá, {$params[1]}";
    }

    public function listUsers()
    {
        return $this->_view->renderTemplate('/users/index', ['users' => User::all()]);
    }
}