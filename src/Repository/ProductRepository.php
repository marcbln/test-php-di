<?php

namespace App\Repository;

class ProductRepository implements RepositoryInterface
{
    public function findAll()
    {
        return ["product 1", "product 2", "product 3"];
    }
}
