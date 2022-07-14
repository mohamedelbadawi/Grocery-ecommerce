<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public const STATUS = ['pending', 'compeleted', 'canceled'];
    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
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
