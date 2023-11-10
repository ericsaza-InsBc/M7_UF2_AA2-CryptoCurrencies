<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoCurrencyHistoric extends Model
{
    use HasFactory;

    protected $fillable = [
        'crypto_currency_id',
        'date',
        'price',
        'market_cap',
        'volume'
    ];
    public function cryptoCurrency()
    {
        return $this->belongsTo(CryptoCurrency::class);
    }
}
