<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods'; 

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'price_promotion',
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}
