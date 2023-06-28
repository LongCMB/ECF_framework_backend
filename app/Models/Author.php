<?php

namespace App\Models;

use App\Models\Citation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bio'
    ];

    public function citation(): HasMany {
        return $this->hasMany(Citation::class);
    }

}
