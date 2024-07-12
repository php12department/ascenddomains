<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';
    protected $fillable = ['question', 'answer', 'is_deleted','category_id'];
    public function scopeNotDeleted($query)
    {
        return $query->where('is_deleted', false);
    }
    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id');
    }
}
