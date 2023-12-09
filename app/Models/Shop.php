<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Shop extends Model
{
    use HasFactory;

    public function Product() : BelongsToMany {
        return $this->belongsToMany(Product::class, 'contracts', 'shop_id', 'product_id');
    }
}

