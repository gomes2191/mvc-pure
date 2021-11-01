<?php

use Illuminate\Database\Capsule\Manager;

$capsule = new Manager;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'bd',
    'database'  => 'teste',
    'username'  => 'root',
    'password'  => 'pass_dev',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();