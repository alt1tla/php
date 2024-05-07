<?php 

namespace src\Views;

class View{
    public function __construct(private $path){}

    public function renderHtml(string $templateName, $vars=[]){
        extract($vars);
        require($this->path.$templateName.'.php');
    }
}