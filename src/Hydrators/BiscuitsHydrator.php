<?php

namespace BisquidsTin\Hydrators;

use BisquidsTin\Classes\Biscuits;

class BiscuitHydrator
{
    public static function getBiscuits(\PDO $db)
    {
        $query = $db->prepare("SELECT `id`, `name`, `img`, `rdt`, `desc`, `wikipedia` FROM `biscuits`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, Biscuit::class);
        $query->execute();
        return $query->fetchAll();
    }
}

?>