<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'praso_validade',
        'valor',
        'cor',
        'peso_kg',
        'observacoes',
        'categorias',
        'qtd_min',
        'qtd_atual'
    ];

    public function categorias(): BelongsTo
    {
        return $this->belongsTo(categorias::class);
    }
}
