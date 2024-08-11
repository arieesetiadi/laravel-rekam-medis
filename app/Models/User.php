<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $table = 'users';
    public $timestamps = false;

    protected $guarded = [];
    protected $hidden = ['password'];

    public function penyediaan(): HasMany
    {
        return $this->hasMany(Penyediaan::class, 'user_id');
    }
}
