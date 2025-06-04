<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'product_type_id',
        'articul',
        'min_partner_price',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
}
