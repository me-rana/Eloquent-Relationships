<?php

namespace App\Models;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function Shop() : BelongsToMany {
        return $this->belongsToMany(Shop::class, 'contracts',  'product_id', 'shop_id');
    }
}
