<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id'
    ]; // dizer quais campos podem ser salvos;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
