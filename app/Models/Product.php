<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'thumbnail', 'description', 'category_id'
    ];
    protected $table = 'products';
    protected $primarykey = 'product_id';
    protected $guarded = [];

    public function order_details(): HasMany
    {
        return $this->hasMany(Order_Details::class, 'product_id', 'id');
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'category_id', 'id');
    }

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class, 'brand_id', 'id');
    }

    public function inventory(): HasMany
    {
        return $this->hasMany(Inventory::class, 'product_id', 'id');
    }

    public function coupon(): HasOne
    {
        return $this->hasOne(Coupon::class, 'product_id', 'id');
    }

    public function favor_product(): HasMany
    {
        return $this->hasMany(Favor_Product::class, 'product_id', 'id');
    }
}
