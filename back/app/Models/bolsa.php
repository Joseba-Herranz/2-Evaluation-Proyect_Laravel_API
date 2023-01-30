<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bolsa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'valor',
        'variacion',
        'created_at',
        'updated_at'
    ];
}
