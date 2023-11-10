<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoCurrency extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'symbol',
        'current_price',
        'market_cap',
        'supply',
        'description',
        'logo_url',
        'website_link'
    ];
}
