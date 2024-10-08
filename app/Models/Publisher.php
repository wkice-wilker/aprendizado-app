<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publisher';

    protected $fillable = [
        'name',
    ];

    public function works()
    {
        return $this->hasMany(Work::class, 'publisher_id');
    }
}
