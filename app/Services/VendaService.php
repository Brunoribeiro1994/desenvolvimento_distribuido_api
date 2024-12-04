<?php

namespace App\Services;

use App\Repositories\VendaRepository;
use App\Jobs\EnviarNotificacaoVenda;

class VendaService
{
    protected $repository;

    public function __construct(VendaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function create(array $data)
    {
        $venda = $this->repository->create($data);
        EnviarNotificacaoVenda::dispatch($venda);
        return $venda;
    }

    public function update($venda, array $data)
    {
        return $this->repository->update($venda, $data);
    }

    public function delete($venda)
    {
        $this->repository->delete($venda);
    }
}
