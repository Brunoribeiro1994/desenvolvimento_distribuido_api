<?php

namespace App\Repositories;

use App\Models\Produto;

class ProdutoRepository
{
    public function getAll()
    {
        return Produto::all();
    }

    public function create(array $data)
    {
        return Produto::create($data);
    }

    public function update(Produto $produto, array $data)
    {
        $produto->update($data);
        return $produto;
    }

    public function delete(Produto $produto)
    {
        $produto->delete();
    }
}
