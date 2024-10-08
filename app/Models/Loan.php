<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loan';

    protected $fillable = [
        'user_id',
        'book_id',
        'loaned_at',
        'due_date',
        'returned_at',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'user_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
