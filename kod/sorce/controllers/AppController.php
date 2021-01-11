<?php

class AppController {
    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    public function isGet(): bool
    {
        return $this->request === 'GET';
    }

    public function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $template = null, array $variables = [])
    {
        $templatePath = 'vievs/'. $template.'.php';
        $output = 'File not found';

        if(file_exists($templatePath)){
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }

    protected function render2(string $template = null, array $variables = []){
        if(isset($_COOKIE['id']))
            $this->render($template,$variables);
        else {

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/home1");
        }
    }

}