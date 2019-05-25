<?php
namespace App\Drive;


class DataAccess
{
    private $drive = 'mysql';
    private $host = '172.17.0.3';
    private $db = 'iti_malia';
    private $password = '123456';
    private $user = 'root';
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new \PDO(
                "{$this->drive}:dbname={$this->db};host={$this->host}",
                $this->user,
                $this->password
            );
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * @return \PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }
}