<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'vendas' => $this->vendas->map(function ($venda) {
                return [
                    'id' => $venda->id,
                    'total' => $venda->total,
                    'status' => $venda->status,
                ];
            }),
        ];
    }
}
