<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['name','description'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function totalRate()
    {
        if ($this->rates->count() == 0) {
            return 0;
        }
        return ($this->rates->sum('star_rate') / $this->rates->count());
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
