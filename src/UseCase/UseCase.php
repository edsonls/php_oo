<?php

namespace App\UseCase;

interface UseCase
{

    public function __construct();

    public function find();

    public function findById($id);

    public function save($obj);
}