<?php

namespace src\Controllers;
use src\Views\View;
use src\Models\Articles\Article;

class ArticleController{
    public $view;
    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates/');
    }

    public function index(){
       $articles = Article::findAll();
        $this->view->renderHTML('/articles/index',['articles'=>$articles]);
    }

    public function show(int $id){
        $article = Article::getById($id);
        $propertiesName= [];
        $reflector = new \ReflectionObject($article);
        $properties = $reflector->getProperties();  
        foreach ( $properties as $property){
            $propertiesName[] = $property->getName();
        }      
        
        if ($article === null) {
            $this->view->renderHTML('errors/error',[],404);
            return;
        }

        $this->view->renderHTML('articles/show',['article'=>$article]);
    }
}