<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    protected $table = 'domains';
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

    public function type()
    {
        return $this->belongsTo(DomainType::class, 'type_id');
    }
    public function domainMedia()
    {
        return $this->hasMany(DomainMedia::class);
    }
    public function category()
    {
        return $this->belongsTo(DomainCategory::class, 'category_id');
    }
}
