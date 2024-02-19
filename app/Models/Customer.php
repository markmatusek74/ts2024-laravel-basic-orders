<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}