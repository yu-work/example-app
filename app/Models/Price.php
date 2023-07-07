<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    /**
     * この価格を持つ商品
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
