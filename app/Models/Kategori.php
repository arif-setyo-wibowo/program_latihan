<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Cabor;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategoris";
    protected $primary = "id";

    public function cabor(): BelongsTo
    {
        return $this->belongsTo(Cabor::class, 'idcabor', 'id');
    }
}
