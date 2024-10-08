<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    protected $table = 'user_account';

    protected $fillable = [
        'username',
        'password',
        'email',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }

    public function sessions()
    {
        return $this->hasMany(UserSession::class, 'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'user_id');
    }

    public function loans()
    {
        return $this->hasMany(Loan::class, 'user_id');
    }
}
