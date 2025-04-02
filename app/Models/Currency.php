<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $table = "currencies";
    
    protected $fillable =[
        'name',
        'symbol',
        'exchange_rate'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'currency_id', 'id');
    }
}
