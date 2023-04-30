<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coupon extends Model
{
    //
    protected $fillable = [
        'title', 'end_date', 'start_date', 'quantity', 'percent'
    ];
    protected $table = 'coupons';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'coupon_id', 'id');
    }
}
