<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_uppercase',
        'tags',
        'length',
        'extension',
        'registrar',
        'exp_date',
        'reg_date',
        'pattern',
        'bin',
        'min_offer',
        'floor_usd',
    ];
}
