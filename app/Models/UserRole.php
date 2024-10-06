<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_role';

    protected $fillable = [
        'role_name',
    ];

    public function users()
    {
        return $this->hasMany(UserAccount::class, 'role_id');
    }
}
