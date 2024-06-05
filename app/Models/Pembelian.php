<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Atlet;
use App\Models\Langganan;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelians';
    protected $primary = 'id';

    public function atlet(): BelongsTo
    {
        return $this->belongsTo(Atlet::class, 'idatlet', 'id');
    }
    public function langganan(): BelongsTo
    {
        return $this->belongsTo(Langganan::class, 'idlangganan', 'id');
    }
}
