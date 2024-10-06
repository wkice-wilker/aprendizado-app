<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $table = 'library';

    protected $fillable = [
        'name',
        'address',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function books()
    {
        return $this->hasMany(Book::class, 'library_id');
    }
}
