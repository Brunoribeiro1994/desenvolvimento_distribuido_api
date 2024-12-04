<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VendaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cliente' => $this->cliente->nome,
            'total' => $this->total,
            'status' => $this->status,
            'itens' => $this->itens->map(function ($item) {
                return [
                    'produto' => $item->produto->nome,
                    'quantidade' => $item->quantidade,
                    'preco' => $item->preco,
                ];
            }),
        ];
    }
}
