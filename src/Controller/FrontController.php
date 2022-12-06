<?php

namespace App\Controller;

use App\Repository\ProductRepository;

class FrontController
{
    private ProductRepository $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function someAction()
    {
        var_dump($this->productRepository->findAll());
    }

}