<?php

namespace BisquidsTin\Utilities;

abstract class DB
{
    /**
     * Function to connect to database.
     *
     * @return \PDO
     */
    public static function getDB()
    {
        return new \PDO('mysql:host=db; dbname=biscuits', 'root', 'password');
    }
} 

