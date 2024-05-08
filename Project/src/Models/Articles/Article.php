<?php

namespace src\Models\Articles;
use src\Models\Users\User;
use src\Models\ActiveRecordEntity;

    class Article extends ActiveRecordEntity{
        

        protected $titles;
        protected $text;
        protected $authorId;
        protected $createdAt;

        
        public function getTitle()
        {
            return $this->titles;
        }
        public function getText()
        {
            return $this->text;
        }

        public function getAuthorId() : User
        {
            return User::getById($this->authorId);
        }

        public function getCreatedAt() 
        {
            return $this->createdAt;
        }

        protected static function getTableName(){
            return 'articles';
        }

    }

    

    // echo $article->getAuthor()->getName();

