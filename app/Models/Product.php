<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name', 'product_code', 'product_description', 'product_vendor',
        'product_image', 'product_stock', 'product_buy_price'
    ];
}
