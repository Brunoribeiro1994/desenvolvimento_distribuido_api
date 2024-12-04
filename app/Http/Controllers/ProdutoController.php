<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use App\Services\ProdutoService;

class ProdutoController extends Controller
{
    protected $produtoService;

    public function __construct(ProdutoService $produtoService)
    {
        $this->produtoService = $produtoService;
    }

    public function index()
    {
        return ProdutoResource::collection($this->produtoService->getAll());
    }

    public function store(StoreProdutoRequest $request)
    {
        $produto = $this->produtoService->create($request->validated());
        return new ProdutoResource($produto);
    }

    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

    public function update(StoreProdutoRequest $request, Produto $produto)
    {
        $produto = $this->produtoService->update($produto, $request->validated());
        return new ProdutoResource($produto);
    }

    public function destroy(Produto $produto)
    {
        $this->produtoService->delete($produto);
        return response()->noContent();
    }
}
