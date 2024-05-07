<?php

namespace src\Models\Articles;
use src\Models\Users\User;

    class Article{
        public function __construct(
            public string $title,
            public string $text,
            public User $author
        ){}

        public function getAuthor(): User
        {
            return $this->author;
        }

    }

    

    // echo $article->getAuthor()->getName();

