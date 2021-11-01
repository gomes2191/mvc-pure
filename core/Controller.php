<?php

namespace Core;

use Core\View;

abstract class Controller
{
    protected $_view;

    public function __construct(View $view)
    {
        $this->_view = $view;
    }
}