<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Kategori;
use App\Models\Cabor;
use App\Models\Petugas;

class Materi extends Model
{
    use HasFactory;
    protected $table = "materis";
    protected $primary = "id";

    public function cabor(): BelongsTo
    {
        return $this->belongsTo(Cabor::class, 'idcabor', 'id');
    }
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'idkategori', 'id');
    }
    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Petugas::class, 'iduser', 'id');
    }

}
