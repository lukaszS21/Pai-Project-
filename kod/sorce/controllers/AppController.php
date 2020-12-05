<?php

class AppController{
    private $request;


    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }
    protected function isPost():bool
    {
        return $this->request==='POST';
    }
    protected function isGet():bool
    {
        return $this->request==='GET';
    }

    protected function render(string $tem = null, array $variables=[]){
        $temPath = 'vievs/'.$tem.'.php';
        $output ="nie ma pliku";
        if(file_exists($temPath))
        {
            extract($variables);
            ob_start();
            include $temPath;
            $output = ob_get_clean();
        }
        print $output;
    }
}