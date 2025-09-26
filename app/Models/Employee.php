<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
class Employee extends Model
{
    protected $fillable = ['name', 'age', 'city', 'is_active'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
