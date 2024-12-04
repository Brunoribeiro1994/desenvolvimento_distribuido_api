<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendaRequest;
use App\Http\Resources\VendaResource;
use App\Models\Venda;
use App\Services\VendaService;

class VendaController extends Controller
{
    protected $vendaService;

    public function __construct(VendaService $vendaService)
    {
        $this->vendaService = $vendaService;
    }

    public function index()
    {
        return VendaResource::collection($this->vendaService->getAll());
    }

    public function store(StoreVendaRequest $request)
    {
        $venda = $this->vendaService->create($request->validated());
        return new VendaResource($venda);
    }

    public function show(Venda $venda)
    {
        return new VendaResource($venda);
    }

    public function update(StoreVendaRequest $request, Venda $venda)
    {
        $venda = $this->vendaService->update($venda, $request->validated());
        return new VendaResource($venda);
    }

    public function destroy(Venda $venda)
    {
        $this->vendaService->delete($venda);
        return response()->noContent();
    }
}
