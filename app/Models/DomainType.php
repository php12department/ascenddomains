<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainType extends Model
{
    use HasFactory;

    protected $table = 'domain_types';

    protected $fillable = ['name', 'is_deleted'];

}
