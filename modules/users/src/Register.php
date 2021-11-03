<?php

namespace Users;

use Jenssegers\Blade\Blade;

use Core\Router;

class Register
{
    public static function handle(Blade $view, Router $router)
    {

       $view->__construct('/Views', false);

        //echo $blade->render('homepage', ['name' => 'John Doe']);

        //$loader = $view->getLoader();

        //$loader->addPath(__DIR__ . '/../app/Views');

        $router->get('/users', 'App\Users\Controllers\UsersController::index');
    }
}