<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penyediaan extends Model
{
    use HasFactory;

    public $table = 'penyediaan';
    public $timestamps = false;

    protected $guarded = [];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
