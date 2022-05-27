<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'lmmeuble',
        'montant',
        'date',
        'cat',
        'des',

    ];
    
}


