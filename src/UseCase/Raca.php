<?php

namespace App\UseCase;

use App\Drive\DataAccess;

class Raca implements UseCase
{
    const TABLE = 'racas';
    private $dataAccess;

    public function __construct()
    {
        $this->dataAccess = new DataAccess();
    }

    public function find()
    {
        $con = $this->dataAccess->getConnection();
        return $con->query("SELECT * FROM " . self::TABLE)
            ->fetchAll();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function save($obj)
    {
        // TODO: Implement save() method.
    }


}