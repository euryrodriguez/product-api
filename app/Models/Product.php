<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;
    use SoftDeletes;

    protected $table = "products";
    
    protected $fillable =[
        'name',
        'description',
        'price',
        'currency_id',
        'tax_cost',
        'manufacturing_cost'
    ];

    public function currency()
    {
        return $this->hasOne('App\Models\Currency', 'currency_id', 'id');
    }
}
