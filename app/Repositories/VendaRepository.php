<?php

namespace App\Repositories;

use App\Models\Venda;

class VendaRepository
{
    public function getAll()
    {
        return Venda::with(['cliente', 'itens.produto'])->get();
    }

    public function create(array $data)
    {
        return Venda::create($data);
    }

    public function update(Venda $venda, array $data)
    {
        $venda->update($data);
        return $venda;
    }

    public function delete(Venda $venda)
    {
        $venda->delete();
    }
}
