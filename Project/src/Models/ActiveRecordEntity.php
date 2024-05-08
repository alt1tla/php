<?php

namespace src\Models;
use src\Services\Db;

abstract class ActiveRecordEntity{
    public function __set($key,$value){
        $property = $this->formatToCamelcase($key);
        $this->$property = $value;
    }

    private function formatToCamelcase($key){
        return lcfirst(str_replace('_','', ucwords($key,"_")));
    }

    public static function findAll(){
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'`';
        return $db->query($sql,[],static::class);
    }    

    public static function getById(int $id){
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE `id`='.$id;
        $res = $db->query($sql,[],static::class);
        return $res ? $res[0] : null;
    }

    abstract protected static function getTableName();
}