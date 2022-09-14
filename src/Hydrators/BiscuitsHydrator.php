<?php

namespace BisquidsTin\Hydrators;

use BisquidsTin\Classes\Biscuits;

class BiscuitsHydrator
{

    /**
     * Function that retrives all biscuit data from the database.
     *
     * @param \PDO $db 
     * @return array returns the database query as an array.
     */
    public static function getBiscuits(\PDO $db): array
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc` AS `description`, `wikipedia`, `dunk`, `flunk` FROM `biscuits`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuits::class);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Function that retrives one biscuit's data from the database.
     *
     * @param \PDO $db 
     * @return Biscuit returns the database query as a Biscuit object.
     */
    public static function getBiscuitById(\PDO $db, string $id): Biscuits
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc` AS `description`, `wikipedia` FROM `biscuits` WHERE `id` = (:id);");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuits::class);
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch();
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
