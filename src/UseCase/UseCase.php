<?php


interface UseCase
{
    const TABLE = '';

    public function __construct();

    public function find();

    public function findById($id);

    public function save($obj);
}