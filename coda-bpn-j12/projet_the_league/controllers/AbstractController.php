<?php

abstract class AbstractController
{

    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        
        $this->twig = new \Twig\Environment($loader, [
            'debug' => true,
        ]);
        
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
    }
    protected function redirect(string $route) : void
    {
        header("Location: $route");
    }

    protected function render(string $template, array $data = []): void
    {
        if (!str_ends_with($template, '.html.twig')) {
            $template .= '.html.twig';
        }
    
        echo $this->twig->render($template, $data);
    }
}