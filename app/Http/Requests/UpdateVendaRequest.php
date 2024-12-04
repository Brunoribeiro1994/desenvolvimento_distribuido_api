<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVendaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'cliente_id' => 'sometimes|exists:clientes,id',
            'itens' => 'sometimes|array',
            'itens.*.produto_id' => 'sometimes|exists:produtos,id',
            'itens.*.quantidade' => 'sometimes|integer|min:1',
            'itens.*.preco' => 'sometimes|numeric|min:0',
        ];
    }
}
