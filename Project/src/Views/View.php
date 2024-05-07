<?php 

namespace src\Views;
//собирает шоблон и данные которые на него нужно вынести
class View{
    public function __construct(private $path){}

    public function renderHtml(string $templateName, $vars=[]){
        extract($vars);
        require($this->path.$templateName.'.php');
    }
}