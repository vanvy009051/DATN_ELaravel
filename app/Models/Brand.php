<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $fillable = [
        'name', 'status'
    ];
    protected $table = 'brands';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
