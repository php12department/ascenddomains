<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainCategory extends Model
{
    use HasFactory;

    protected $table = 'domain_categories';

    protected $fillable = ['id','name','is_delete'];
}
