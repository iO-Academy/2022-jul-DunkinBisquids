<?php

namespace BisquidsTin\Utilities;

abstract class GetDB
{
    public static function getDB()
    {
        $db = new \PDO('mysql:host=db; dbname=biscuits', 'root', 'password');
        return $db;
    }
} 

