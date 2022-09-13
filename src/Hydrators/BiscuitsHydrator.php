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
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc`, `wikipedia` FROM `biscuits`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuits::class);
        $query->execute();
        return $query->fetchAll();
    }
}

?>