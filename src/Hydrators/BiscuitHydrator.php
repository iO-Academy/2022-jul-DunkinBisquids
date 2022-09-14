<?php

namespace BisquidsTin\Hydrators;

use BisquidsTin\Classes\Biscuit;
use BisquidsTin\CustomExceptions\InvalidIdException;

class BiscuitHydrator
{

    /**
     * Function that retrieves all biscuit data from the database.
     *
     * @param \PDO $db 
     * @return array returns the database query as an array.
     */
    public static function getBiscuits(\PDO $db): array
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc` AS `description`, `wikipedia`, `dunk`, `flunk` FROM `biscuits`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuit::class);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Function that retrieves one biscuit based on id provided
     *
     * @param \PDO $db
     * @param string $id
     * @return Biscuit returns the biscuit with the correct id
     */
    public static function getBiscuitById(\PDO $db, string $id): Biscuit
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc` AS `description`, `wikipedia`, `dunk`, `flunk` FROM `biscuits` WHERE `id` = (:id);");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuit::class);
        $query->bindParam(":id", $id);
        $query->execute();
        $result = $query->fetch();
        if (!$result) {
            throw new InvalidIdException();
        }
        return $result;
    }
        /**
     * Function to increment dunk number by one
     *
     * @param \PDO $db
     * @param string $id
     * @return boolean
     */
    public static function incrementDunk(\PDO $db, string $id): bool
    {
        $query = $db->prepare("UPDATE `biscuits` SET `dunk` = `dunk` + 1 WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * Function to increment flunk number by one
     *
     * @param \PDO $db
     * @param string $id
     * @return boolean
     */
    public static function incrementFlunk(\PDO $db, string $id): bool
    {
        $query = $db->prepare("UPDATE `biscuits` SET `flunk` = `flunk` + 1 WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * Function to decrement dunk number by one
     *
     * @param \PDO $db
     * @param string $id
     * @return boolean
     */
    public static function decrementDunk(\PDO $db, string $id): bool
    {
        $query = $db->prepare("UPDATE `biscuits` SET `dunk` = `dunk` - 1 WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    /**
     * Function to decrement flunk number by one
     *
     * @param \PDO $db
     * @param string $id
     * @return boolean
     */
    public static function decrementFlunk(\PDO $db, string $id): bool
    {
        $query = $db->prepare("UPDATE `biscuits` SET `flunk` = `flunk` - 1 WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}


?>