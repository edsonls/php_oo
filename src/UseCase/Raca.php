<?php

namespace App\UseCase;

use App\Drive\DataAccess;

class Raca implements UseCase
{
    const TABLE = 'racas';
    const INSERT = 'INSERT INTO ' . self::TABLE . ' (nome) values(:nome)';
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


    /**
     * @param $obj \App\Model\Raca
     *
     * @return bool
     */
    public function save($obj)
    {
        try {
            $con = $this->dataAccess->getConnection();
            $sth = $con->prepare(self::INSERT);
            return $sth->execute([':nome' => $obj->getNome()]);
        } catch (\Exception $e) {
            var_dump($e);
            exit();
        }
    }


}