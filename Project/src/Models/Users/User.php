<?php

namespace src\Models\Users;

class User{
    public function __construct(public $name){
    }
    public function getName()
    {
        return $this->name;
    }
}