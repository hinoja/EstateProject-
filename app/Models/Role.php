<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // ACCESSORS
    public function getNameAttribute($value): string
    {
        return __($value);
    }

    // RELATIONSHIPS
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
