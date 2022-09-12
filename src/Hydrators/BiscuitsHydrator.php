<?php

namespace BisquidsTin\Hydrators;

use BisquidsTin\Classes\Biscuits;

class BiscuitsHydrator
{
    public static function getBiscuits(\PDO $db)
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `RDT`, `desc`, `wikipedia` FROM `biscuits`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuits::class);
        $query->execute();
        return $query->fetchAll();
    }
}

?>