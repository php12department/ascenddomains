<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingInformation extends Model
{
    use HasFactory;

    protected $table = 'billing_information';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'country',
        'address1',
        'address2',
        'zip_code',
        'city',
        'state',
        'phone_number',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
