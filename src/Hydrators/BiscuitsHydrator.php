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
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc` AS `description`, `wikipedia` FROM `biscuits`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuits::class);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Function that retrives all biscuit data from the database.
     *
     * @param \PDO $db 
     * @return array returns the database query as an array.
     */
    public static function getBiscuitById(\PDO $db, string $id): Biscuits
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc` AS `description`, `wikipedia` FROM `biscuits` WHERE `id` = (:id);");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuits::class);
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch();
    }
}

?>