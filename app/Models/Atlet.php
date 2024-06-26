<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Langganan;

class Atlet extends Model
{
    use HasFactory;
    protected $table = "atlets";
    protected $primary = "id";

    public function langganan(): BelongsTo
    {
        return $this->belongsTo(Langganan::class, 'idlangganan', 'id');
    }
}
