<?php

namespace Core;

class View
{
    /**
     * Renderizar um arquivo de visualização
     *
     * @param string $view  O arquivo de visualização
     * @param array $args  Matriz associativa de dados para exibir na visualização (opcional)
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/app/Views/$view";  // em relação ao diretório principal

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file não existe.");
        }
    }

    /**
     * Renderizar um modelo de visão usando blade
     *
     * @param string $view  O arquivo de visão
     * @param array $args  Matriz associativa de dados para exibir na visualização (opcional)
     *
     * @return void
     */
    public static function renderTemplate($view, $args = [])
    {
        static $blade = null;

        if ($blade === null) {
            $blade = new \Jenssegers\Blade\Blade(dirname(__DIR__) . '/app/Views', dirname(__DIR__) . '/cache');
        }

        echo $blade->render($view, $args);
    }
}