<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'nascimento',
        'email',
        'password',
    ]; 

    public function user()
    {
        return $this->belongsTo(Category::class);
    }
}