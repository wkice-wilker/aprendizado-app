<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';

    protected $fillable = [
        'name',
        'state',
        'country',
    ];

    public function libraries()
    {
        return $this->hasMany(Library::class, 'city_id');
    }
}
