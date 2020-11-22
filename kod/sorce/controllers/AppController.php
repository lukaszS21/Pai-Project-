<?php

class AppController{
    protected function render(string $tem = numfmt_get_locale){
        $temPath = 'vievs/'.$tem.'.html';
        $output ="nie ma pliku";
        if(file_exists($temPath))
        {
            ob_start();
            include $temPath;
            $output = ob_get_clean();
        }
        print $output;
    }
}