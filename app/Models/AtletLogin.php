<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtletLogin extends Model
{
    use HasFactory;
    protected $table = 'atlet_logins';
    protected $primary = 'id';
}
