<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $fillable = [
        'work_id',
        'library_id',
        'isbn',
        'available',
    ];

    public function work()
    {
        return $this->belongsTo(Work::class, 'work_id');
    }

    public function library()
    {
        return $this->belongsTo(Library::class, 'library_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'book_id');
    }

    public function loans()
    {
        return $this->hasMany(Loan::class, 'book_id');
    }
}
