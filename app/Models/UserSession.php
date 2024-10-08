<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSession extends Model
{
    use HasFactory;

    protected $table = 'user_session';

    protected $fillable = [
        'user_id',
        'session_token',
        'created_at',
        'expires_at',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'user_id');
    }
}
