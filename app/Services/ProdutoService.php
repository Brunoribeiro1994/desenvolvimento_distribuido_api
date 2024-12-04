<?php

namespace App\Services;

use App\Repositories\ProdutoRepository;

class ProdutoService
{
    protected $repository;

    public function __construct(ProdutoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update($produto, array $data)
    {
        return $this->repository->update($produto, $data);
    }

    public function delete($produto)
    {
        $this->repository->delete($produto);
    }
}
