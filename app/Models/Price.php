<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = "prices";
    
    protected $fillable =[
        'product_id',
        'currency_id',
        'price'
    ];
    
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency', 'currency_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
