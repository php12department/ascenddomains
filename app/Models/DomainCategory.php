<?php

namespace App\Models;

use App\Models\Domain;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DomainCategory extends Model
{
    use HasFactory;

    protected $table = 'domain_categories';

    protected $fillable = ['id','name','is_delete'];
    public function domains()
    {
        return $this->hasMany(Domain::class, 'category_id');
    }
}
