<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainMedia extends Model
{
    use HasFactory;
    protected $table = 'domain_media';
    protected $fillable = [
        'media_img',
        'domain_id',
        'is_delete',
    ];
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
