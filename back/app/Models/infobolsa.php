<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infobolsa extends Model
{
    // use HasFactory;

    protected $table = 'bolsa';

    protected $fillable = [
        'id',
        'nombre',
        'valor',
        'created_at'
    ];


    
}
