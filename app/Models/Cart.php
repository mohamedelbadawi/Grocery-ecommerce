<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(CartProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function total()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getSubtotal();
        }
        return $total;
    }
}
