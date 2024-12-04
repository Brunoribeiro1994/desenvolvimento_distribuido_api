<?php

namespace App\Jobs;

use App\Models\Venda;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EnviarNotificacaoVenda implements ShouldQueue
{
    use Queueable, InteractsWithQueue, SerializesModels;

    protected $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function handle()
    {
        logger("Notificação enviada para a venda #{$this->venda->id}");
    }
}