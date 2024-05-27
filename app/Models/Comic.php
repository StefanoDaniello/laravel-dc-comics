<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
    ];
    // Campi che non sono riempiti dall'utente se non inseriamo 
    //niente comunque saranno intesi  'id', 'created_at' o 'updated_at'
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
