<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Repository\RepositoryInterface;

class SomeOtherController
{
    private RepositoryInterface $repository;

    /**
     * @param ProductRepository $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function someAction()
    {
        var_dump($this->repository->findAll());
    }

}